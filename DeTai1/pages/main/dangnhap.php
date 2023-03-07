<?php
include("class/login.php");
$p=new login()
?>
<form id="form1" name="form1" method="post" action="">
  <table width="600" border="1">
    <tr>
      <td colspan="2" align="center">Đăng nhập Khách Hàng</td>
    </tr>
    <tr>
      <td width="268">Email</td>
      <td width="316"><label for="textfield"></label>
      <input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="textfield2"></label>
      <input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="dangnhap" id="dangnhap" value="Đăng nhập" />
      <input type="submit" name="dangky" id="dangky" value="Đăng ký" />
      <input type="submit" name="doimatkhau" id="doimatkhau" value="Đổi mật khẩu" /></td>
    </tr>
  </table>
   <div align="center">
  <?php
  switch($_POST['dangnhap'])
  {
	  case 'Đăng nhập':
	  {
		  $email=$_REQUEST['email'];
		  $pass=$_REQUEST['password'];
		  if($email!='' && $pass!='')
		  {
			  if($p->myloginKH($email,$pass)==1)
			  {
				  $_SESSION['dangnhap']=$email;
				  header('location:index.php?quanly=giohang');
			  }
			else
				{
					echo 'Email hoặc Password bị sai';
				}
		}
		else
		{
			echo "Vui long nhap username va pass.";
		}
		 break; 
	  }
  }
  switch($_POST['dangky'])
  {
	  case 'Đăng ký':
	  {
		  header("location:index.php?quanly=dangky");
		 break; 
	  }
  }
    switch($_POST['doimatkhau'])
  {
	  case 'Đổi mật khẩu':
	  {
		  header("location:index.php?quanly=thaydoimatkhau");
		 break; 
	  }
  }
  ?>
  </div>
 </form>