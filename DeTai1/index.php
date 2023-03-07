<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Máy Tính</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
</head>

<body>
<div class="wrapper">
<?php
session_start();
include("admin/comfig/comfig.php");
include("pages/header.php");
include("pages/menu.php");
include("pages/main.php");
include("pages/footer.php");
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
<script type="text/javascript">
	$('#tabs-nav li:first-child').addClass('active');
	$('.tab-content').hide();
	$('.tab-content:first').show();
	
	$('#tabs-nav li').click(function(){
		$('#tabs-nav li').removeClass('active');
		$(this).addClass('active');
		$('.tab-content').hide();
		
		var activeTab=$(this).find('a').attr('href');
		$(activeTab).fadeIn();
		return false;
		});
</script>
</div>
</body>
</html>