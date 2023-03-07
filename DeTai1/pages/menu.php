<?php
	$sql_danhmuc= "select * from tbl_danhmuc order by id_danhmuc desc ";
	$query_danhmuc= mysqli_query($con,$sql_danhmuc);
	
?>
<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
	unset($_SESSION['dangnhap']);
	}
?>
<div class="menu">
     <ul class="list_menu">
       <li><a href="index.php">Trang chủ</a></li>
       <?php
	   	while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
	   ?>
       <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
       <?php
		}
	   ?>
       <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
       <li><a href="index.php?quanly=tintuc">Tin tức</a></li>
       <li><a href="index.php?quanly=hotro">Hỗ trợ</a></li>
        <?php
			if(isset($_SESSION['dangnhap']))
			{
        ?>
        <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
		<?php
        }else
        {
        ?>
        <li><a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
		<?php
        }
        ?>
     </ul>
</div>
<div class="clear"></div>