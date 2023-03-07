
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    <div class="clear"></div>
    <div class="main">
    	<?php
			if(isset($_GET['action']) && $_GET['query'])
			{
				$tam=$_GET['action'];
				$query= $_GET['query'];
			}
			else
			{
				$tam='';
				$query='';
			}
			if($tam=='quanlydanhmucsanpham' && $query=='them')
			{
				include('modules/quanlydanhmucsp/them.php');
				include('modules/quanlydanhmucsp/lietke.php');
				
			}
			elseif($tam=='quanlydanhmucsanpham' && $query=='sua')
			{
				include('modules/quanlydanhmucsp/sua.php');
			}
			elseif($tam=='quanlyhang' && $query=='them')
			{
				include('modules/quanlyhang/them.php');
				include('modules/quanlyhang/lietke.php');
				
			}
			elseif($tam=='quanlyhang' && $query=='sua')
			{
				include('modules/quanlyhang/sua.php');
			}
			
			elseif($tam=='quanlysp' && $query=='them')
			{
				include('modules/quanlysp/them.php');
				include('modules/quanlysp/lietke.php');
			}
			elseif($tam=='quanlysp' && $query=='sua')
			{
				include('modules/quanlysp/sua.php');
			}
			elseif($tam=='quanlydonhang' && $query=='lietke')
			{
				include('modules/quanlydonhang/lietke.php');
			}
			elseif($tam=='donhang' && $query=='xemdonhang')
			{
				include('modules/quanlydonhang/xemdonhang.php');
			}
			elseif($tam=='quanlyweb' && $query=='capnhat')
			{
				include('modules/thongtinweb/quanly.php');
			}
			else
			{
				include('modules/dashboard.php');
			}
		?>
    </div>
</body>
</html>