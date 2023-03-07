<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	if(isset($_POST['timkiem']))
	{
		$tukhoa=$_POST['tukhoa'];
	}
	else
	{
		$tukhoa='';
	}
	$sql_pro="select * from tbl_sanpham,tbl_danhmuc where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc and tbl_sanpham.tensanpham like '%".$tukhoa."%' ";
	$query_pro = mysqli_query($con,$sql_pro);
?>
<h3>Từ khóa tìm kiếm: <?php echo $_POST['tukhoa'];  ?></h3>
    <ul class="product_list">
    	<?php
		while($row = mysqli_fetch_array($query_pro)){
		?>
    	<li>
        	<a href="">
            <p class="title_product" style="font-weight:bold"><?php echo $row['tensanpham'] ?></p>
            <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
            <p class="price_product" style="color:#F00; font-weight:bold;"><?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
            <p style="text-align:center; color:#666"><?php echo $row['tendanhmuc'] ?></p>
            </a>
    	</li>
     	<?php
		}
		?>
    </ul>
</body>
</html>