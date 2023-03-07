<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("../../comfig/comfig.php");
	$thongtinlienhe=$_POST['thongtinlienhe'];
	$id=$_GET['id'];
	if(isset($_POST['submitlienhe']))
	{
		$sql_update="update tbl_hotro set thongtinlienhe='".$thongtinlienhe."' where id='$id' ";
		mysqli_query($con,$sql_update);
		header('location:../../index.php?action=quanlyweb&query=capnhat');
	}
?>
<?php
	include('../../comfig/comfig.php');
	if(isset($_GET['chuaxuly']))
	{
		$id_hotro = $_GET['chuaxuly'];
		$sql_update = "update tbl_ychotro set xuly=0 where id_hotro='".$id_hotro."'";
		$query = mysqli_query($con,$sql_update);
		header('location:../../index.php?action=quanlyweb&query=capnhat');
	}
?>
</body>
</html>