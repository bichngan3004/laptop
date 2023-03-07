<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
    	include("../../comfig/comfig.php");
		$hang=$_POST['hang'];
		if(isset($_POST['themhang']))
		{
			$sql_them="insert into tbl_hang(hang) values('".$hang."')";
			mysqli_query($con,$sql_them);
			header("location:../../index.php?action=quanlyhang&query=them");
		}
		elseif(isset($_POST['suahang']))
		{
			$sql_sua="update tbl_hang set hang='".$hang."' where id_hang='$_GET[idhang]'";
			mysqli_query($con,$sql_sua);
			header("location:../../index.php?action=quanlyhang&query=them");
		}
		else
		{
			$id=$_GET['iddanhmuc'];
			$sql_xoa="DELETE FROM tbl_hang where hang ='".$id."'";
			mysqli_query($con,$sql_xoa);
			header('location:../../index.php?action=quanlyhang&query=them');
		}
    ?>
</body>
</html>