<?php
include("modules/quanlysp/class/login.php");
$p= new login();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Admin</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="600" border="1">
    <tr>
      <td colspan="2" align="center">Đăng nhập Admin</td>
    </tr>
    <tr>
      <td width="268">Tài Khoản</td>
      <td width="316"><label for="textfield"></label>
      <input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="textfield2"></label>
      <input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="dangnhap" id="dangnhap" value="Đăng nhập" /></td>
    </tr>
  </table>
   <div align="center">
  <?php
  switch($_POST['dangnhap'])
  {
	  case 'Đăng nhập':
	  {
		  $user=$_REQUEST['username'];
		  $pass=$_REQUEST['password'];
		  if($user!='' && $pass!='')
		  {
			  if($p->mylogin($user,$pass)==1)
			  {
				  header('location:index.php');
			  }
			else
				{
					echo 'dang nhap that bai';
				}
		}
		else
		{
			echo "Vui long nhap username va pass.";
		}
		 break; 
	  }
  }
  ?>
  </div>
</form>
</body>
</html>