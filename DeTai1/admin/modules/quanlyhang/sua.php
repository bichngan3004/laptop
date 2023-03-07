<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		
    	$sql_sua_hang= "select * from tbl_hang where id_hang='$_GET[idhang]' limit 1";
		$query_sua_hang= mysqli_query($con,$sql_sua_hang);
    ?>
	<p>Sua san pham</p>
    <table border="1" width="50%" style="border-collapse:collapse;">
    	<form method="POST" action="modules/quanlyhang/xuly.php?iddanhmuc=<?php echo $_GET['idhang'] ?>">
        <?php
			while($row=mysqli_fetch_array($query_sua_hang)){
			
		?>
            <tr>
            	<td>Hãng</td>
                <td><input type="text" value="<?php echo $row['hang']?>" name="hang"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="suadanhmuc" value="Sửa hãng"/></td>
            </tr>
        </form>
        <?php
			}
		?>
        </table>
</body>
</html>