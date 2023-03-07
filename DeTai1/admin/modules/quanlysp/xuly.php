 
<?php
include('class/clsupfile.php');
$p=new uploadfile();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
    	include("../../comfig/comfig.php");
		$id_danhmuc=$_POST['danhmuc'];
		$hang=$_POST['hang'];
		$tensanpham=$_POST['tensanpham'];
		$masp=$_POST['masp'];
		$giasp=$_POST['giasp'];
		$soluong=$_POST['soluong'];
		//xu ly hinh anh
		$name = $_FILES['hinhanh']['name'];
		$tmp_name = $_FILES['hinhanh']['tmp_name'];
		$type=$_FILES['hinhanh']['type'];
		$size=$_FILES['hinhanh']['size'];
		$name=time().'_'.$name;
		$tomtat=$_POST['tomtat'];
		$noidung=$_POST['noidung'];
		$tinhtrang=$_POST['tinhtrang'];
		//$danhmuc=$_POST['danhmuc'];
		if(isset($_POST['themsanpham']))
		{
			
			$sql_them="insert into tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc,hang) values('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$name."','".$tomtat."','".$noidung."','".$tinhtrang."','".$id_danhmuc."','".$hang."')";
			mysqli_query($con,$sql_them);
			$p->myupfile($name,$tmp_name,'uploads');
			header("location:../../index.php?action=quanlysp&query=them");
		}
		elseif(isset($_POST['suasanpham']))
		{
			if($name!='')
			{
			
			$p->myupfile($name,$tmp_name,'uploads');
			
			$sql_sua="update tbl_sanpham set tensanpham='".$tensanpham."', masp='".$masp."', giasp='".$giasp."', soluong='".$soluong."', hinhanh='".$name."', tomtat='".$tomtat."', noidung='".$noidung."', tinhtrang='".$tinhtrang."',id_danhmuc='".$id_danhmuc."',hang='".$hang."' where id_sanpham='$_GET[idsanpham]'";
			//update rồi xóa hình ảnh cũ
			$sql="select * from tnl_sanpham where id_sanpham='$_GET[idsanpham]' limit 1 ";
			$query=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($query))
			{
				unlink('uploads/'.$row['hinhanh']);
			}
			}
			else
			{
				$sql_sua="update tbl_sanpham set tensanpham='".$tensanpham."', masp='".$masp."', giasp='".$giasp."', soluong='".$soluong."', tomtat='".$tomtat."', noidung='".$noidung."', tinhtrang='".$tinhtrang."',id_danhmuc='".$id_danhmuc."',hang='".$hang."' where id_sanpham='$_GET[idsanpham]'";
			}
			mysqli_query($con,$sql_sua);
			header("location:../../index.php?action=quanlysp&query=them");
		}
		else
		{
			$id=$_GET['idsanpham'];
			$sql="select * from tnl_sanpham where id_sanpham='".$id."' limit 1 ";
			$query=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($query))
			{
				unlink('uploads/'.$row['hinhanh']);
			}
			$sql_xoa="DELETE FROM tbl_sanpham where id_sanpham ='".$id."'";
			mysqli_query($con,$sql_xoa);
			header('location:../../index.php?action=quanlysp&query=them');
		}
    ?>
</body>
</html>