<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> Thống kê</title>
</head>
<body>
	<form method="post" action="thongke.php">
		chọn tháng:
		<select name="slmonth">
<?php
	for ($i = 1; $i<=12; $i++) {
?>
	<option value="<?php echo $i; ?> "><?php echo $i; ?></option>
<?php

	}
	?>
</select>

	Chọn năm
	<select name="slyear">
		<?php
			for($j = 1990; $j<=2017; $j++) {
		?>
	<option value="<?php echo $j; ?>"> <?php echo $j; ?></option>
<?php
}
?>
</select>
<input type="submit" value="thống kê" name="btnSubmit"/>
</form>

<?php
	$con=mysqli_connect('localhost','root','','thucpham');

	$month=0;
	$year=0;

//hien thi danh sach cac don hang theo thang 
	if (isset($_POST['btnSubmit'])) {
		$month=$_POST ['slmonth'];
		$year= $_POST ['slyear'];
		$sql="select * from don_dat_hang where year(orderdate)= {$year} and month (orderdate)={$month}";
	} else {
		$sql="select*from don_dat_hang";

	}

	$recordset= mysql_query($sql);

	// lay ra tong so hoa don
	$totalorder= mysql_num_rows($recordset);

	// lay ve tong ban ghi trong databse
	$rsacc= mysql_query('select count (*) as totalaccount from account');
	$rowacc= mysql_fetch_array($rsacc);
	$totalaccount= $rowacc['totalaccount'];
	?>

	<h2> Tổng số tài khoản <?php echo $totalaccount; ?></h2>
	<BR><BR>

	<?php if($totalorder>0){?>
		<table width="600" border="1" cellpadding="1">
		<tr>
			<th>Mã hóa đơn:</th>
			<th>Ngày lập:</th>
			<th>Địa chỉ giao hàng:</th>
			<th>Mã khách hàng:</th>
			<th> Trạng thái:</th>
			<th>Tổng tiền:</th>
	</tr>
<?php
	//bien nay chua tong gia troi cac don hang
	$totalvalue=0;

	//duyet qua danh sach cac hoa don theo tung thang
	while ($row =mysql_fetch_array($recordset))
	{
		?>
		<tr>
			<td> <?php echo $row['orderid']; ?></td>
			<td> <?php echo $row['orderdate']; ?></td>
			<td> <?php echo $row['address']; ?></td>
			<td> <?php echo $row['customerid']; ?></td>

<td>
	<?php 
	//hien thi trang thai hoa don
	$right = $row['status'];
	if ($right== '1')
		echo "Đã giao hàng";
	else 
		echo "Chưa giao hàng";

	//lay ve gia tri don hang
	$value = $row['total'];

	//tinh ra tong gia tri cua cac don hang
	$totalvalue = $totalvalue+ $value;
	?>
</td>

	<td><?php echo $row['total']; ?> </td>

</tr>

<?php 
}
?>
</table>
<BR><BR>
<h2> Tổng giá trị các hóa đơn là: <?php echo $totalvalue; ?> </h2>
<?php } else { ?>
	<h2> Không có hóa đơn nào:</h2>

	<?php } ?>
	<?php
	mysql_close($Connection);
	?>
</body>
</html>	

