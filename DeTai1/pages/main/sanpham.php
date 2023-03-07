<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../../css/style.css"/>
</head>

<body>

<p>Chi tiết sản phẩm</p>
<?php
	$sql_chitiet= "select * from tbl_sanpham,tbl_danhmuc where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc and tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1 ";
	$query_chitiet= mysqli_query($con,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){	
?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
        <img width="100%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
        <div class="chitiet_sanpham">
            <h3 style="margin:0">Tên sản phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
            <p>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
            <p>Giá sản phẩm: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
            <p>Số lượng sản phẩm: <?php echo $row_chitiet['soluong'] ?></p>
            <p>Danh mục sản phẩm: <?php echo $row_chitiet['tendanhmuc'] ?></p>
            <p><input class="themgiohang" type="submit" name="themgiohang" value="Thêm vào giỏ hàng"></p>
        </div>
    </form>
</div>
<div class="clear"></div>
	 <div class="tabs">
          <ul id="tabs-nav">
            <li><a href="#tab1">Thông số kĩ thuật</a></li>
            <li><a href="#tab2">Nội dung chi tiết</a></li>
          
          </ul> 
          <div id="tabs-content">
            <div id="tab1" class="tab-content">
              <?php echo $row_chitiet['tomtat'] ?>
            </div>
            <div id="tab2" class="tab-content">
               <?php echo $row_chitiet['noidung'] ?>
            </div>
           
     </div> 
</div> 

<?php
}
?>
</body>
</html>