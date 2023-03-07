<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
    	include("../../comfig/comfig.php");
		$tenloaisp=$_POST['tendanhmuc'];
		$thutu=$_POST['thutu'];
		if(isset($_POST['themdanhmuc']))
		{
			$sql_them="insert into tbl_danhmuc(tendanhmuc,thutu) values('".$tenloaisp."','".$thutu."')";
			mysqli_query($con,$sql_them);
			header("location:../../index.php?action=quanlydanhmucsanpham&query=them");
		}
		elseif(isset($_POST['suadanhmuc']))
		{
			$sql_sua="update tbl_danhmuc set tendanhmuc='".$tenloaisp."', thutu='".$thutu."' where id_danhmuc='$_GET[iddanhmuc]'";
			mysqli_query($con,$sql_sua);
			header("location:../../index.php?action=quanlydanhmucsanpham&query=them");
		}
		else
		{
			$id=$_GET['iddanhmuc'];
			$sql_xoa="DELETE FROM tbl_danhmuc where id_danhmuc ='".$id."'";
			mysqli_query($con,$sql_xoa);
			header('location:../../index.php?action=quanlydanhmucsp&query=them');
		}
    ?>
</body>
</html>