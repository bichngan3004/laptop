<?php
session_start();
if( isset($_SESSION['username']) && isset($_SESSION['password']))
{
	include('modules/quanlysp/class/login.php');
	$q=new login();
	$q->confirmlogin($_SESSION['username'],$_SESSION['password']);
}
else
{
 header('location:login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>
<link rel="stylesheet" type="text/css" href="css/styleadmin.css"/>
</head>

<body>
    <h3 class="title_admin">Chào mừng bạn đến trang admin</h3>
    <div class="wrapper">
        <?php
			include("comfig/comfig.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            include("modules/footer.php");
        ?>
    </div>
    <script type="text javascript" src ="src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"" ></script>
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js" ></script>
    <script>
    	CKEDITOR.replace('thongtinlienhe');
    </script>
</body>
</html>