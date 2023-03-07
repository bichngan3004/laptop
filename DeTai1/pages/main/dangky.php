<?php
session_start();
if(isset($_POST['dangky']))
{
	$tenkhachhang=$_POST['hovaten'];
	$email=$_POST['email'];
	$dienthoai=$_POST['dienthoai'];
	$matkhau=md5($_POST['matkhau']);
	$diachi=$_POST['diachi'];
	$sql_dangky= mysqli_query($con,"INSERT INTO tbl_dangky(tenkhachhang,email,dienthoai,matkhau,diachi)
	VALUE ('".$tenkhachhang."','".$email."','".$dienthoai."','".$matkhau."','".$diachi."')");
	if($sql_dangky)
	{
		echo "<h3>Đăng ký thành công</h3>";
		
		$_SESSION['dangky']=$tenkhachhang;
		
		$_SESSION['id_khachhang']=mysqli_insert_id($con);
	}
	}
	if(isset($_POST['dangnhap']))
{
	header('location:index.php?quanly=dangnhap');
}
?>
<form name="form1" method="post" action="">
  <table width="792" border="1">
    <tr>
      <td colspan="2" align="center">Đăng ký thành viên</td>
    </tr>
    <tr>
      <td width="336">Họ và tên</td>
      <td width="440"><label for="textfield"></label>
      <input type="text" name="hovaten" id="hovaten"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="textfield2"></label>
      <input type="text" name="email" id="email"></td>
    </tr>
    <tr>
      <td>Điện thoại</td>
      <td><label for="textfield3"></label>
      <input type="text" name="dienthoai" id="dienthoai"></td>
    </tr>
    <tr>
      <td><p>Địa chỉ</p></td>
      <td><label for="textfield4"></label>
      <input type="text" name="diachi" id="diachi"></td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td><label for="textfield5"></label>
      <input type="password" name="matkhau" id="matkhau"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="dangky" id="dangky" value="Đăng ký">
      <input type="submit" name="dangnhap" id="dangnhap" value="Đăng nhập"></td>
    </tr>
  </table>
</form>
