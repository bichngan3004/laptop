<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		
    	$sql_sua_danhmucsp= "select * from tbl_danhmuc where id_danhmuc='$_GET[iddanhmuc]' limit 1";
		$query_sua_danhmucsp= mysqli_query($con,$sql_sua_danhmucsp);
    ?>
	<p>Sua san pham</p>
    <table border="1" width="50%" style="border-collapse:collapse;">
    	<form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <?php
			while($row=mysqli_fetch_array($query_sua_danhmucsp)){
			
		?>
        	<tr>
            	<td>Tên danh mục</td>
                <td><input type="text" value="<?php echo $row['tendanhmuc']?>" name="tendanhmuc"/></td>
            </tr>
            <tr>
            	<td>Thứ tự</td>
                <td><input type="text" value="<?php echo $row['thutu']?>" name="thutu"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"/></td>
            </tr>
        </form>
        <?php
			}
		?>
        </table>
</body>
</html>