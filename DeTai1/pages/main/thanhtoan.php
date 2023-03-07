<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		session_start();
		include("../../admin/comfig/comfig.php");
		$id_khachhang=$_SESSION['id_khachhang'];
		$code_order=rand(0,9999);
		$insert_cart=" insert into tbl_cart(id_khachhang,code_cart,cart_status) values ('".$id_khachhang."','".$code_order."',1)";
		$cart_query=mysqli_query($con,$insert_cart);
		if($insert_cart)
		{
			//them gio hang chi tiet
			foreach($_SESSION['cart'] as $key => $value)
			{
				$id_sanpham=$value['id'];
				$soluong=$value['soluong'];
				$insert_order_details = " insert into tbl_cart_details(id_sanpham,code_cart,soluongmua) values ('".$id_sanpham."','".$code_order."','".$soluong."') ";
				mysqli_query($con,$insert_order_details);
			}
		}
		unset($_SESSION['cart']);
		header("location:../../index.php?quanly=camon");
	?>

</body>
</html>