<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$sql_lh="select * from tbl_hotro where id=1";
	$query_lh= mysqli_query($con,$sql_lh);
?>

			<?php
				while($row=mysqli_fetch_array($query_lh))
				{
			?>
    	
        		<p><?php echo $row['thongtinlienhe'] ?></p>
            
             <p>
                  <?php
				}
			 ?>
</p>

<?php
session_start();
if(isset($_POST['gui']))
{
	$tenkhachhang=$_POST['tenkhachhang'];
	$sodienthoai=$_POST['sodienthoai'];
	$email=$_POST['email'];
	$noidung=$_POST['noidung'];
	$xuly='1';
	$sql_hotro= mysqli_query($con,"INSERT INTO tbl_ychotro(tenkhachhang,sodienthoai,email,noidung,xuly)
	VALUE ('".$tenkhachhang."','".$sodienthoai."','".$email."','".$noidung."','".$xuly."')");
	if($sql_hotro)
	{
		echo "<p>Yêu cầu của quý khách đã được gửi, nhân viên sẽ sớm liên hệ với quý khách</p>";
		
	}
}
?>
             <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
               <table width="800" border="1">
                 <tr>
                   <td width="232">Tên khách hàng</td>
                   <td width="552"><label for="textfield"></label>
                   <input type="text" name="tenkhachhang" id="tenkhachhang" /></td>
                 </tr>
                 <tr>
                   <td>Số điện thoại</td>
                   <td><label for="textfield2"></label>
                   <input type="text" name="sodienthoai" id="sodienthoai" /></td>
                 </tr>
                 <tr>
                   <td>Email</td>
                   <td><label for="textfield3"></label>
                   <input type="text" name="email" id="email" /></td>
                 </tr>
                 <tr>
                   <td>Nội dung</td>
                   <td><label for="textfield4"></label>
                     <label for="textarea"></label>
                   <textarea name="noidung" id="noidung" cols="45" rows="5"></textarea></td>
                 </tr>
                 <tr>
                   <td colspan="2" align="center"><input type="submit" name="gui" id="gui" value="Gửi" /></td>
                 </tr>
               </table>
             </form>
             <p>&nbsp;</p>
             
</body>
</html>