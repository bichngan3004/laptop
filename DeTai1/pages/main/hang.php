<?php
	$sql_pro= "select * from tbl_sanpham where tbl_sanpham.hang='$_GET[id]' order by id_sanpham DESC ";
	$query_pro= mysqli_query($con,$sql_pro);
	
	$sql_cate= "select * from tbl_hang where tbl_hang.id_hang='$_GET[id]' LIMIT 1 ";
	$query_cate= mysqli_query($con,$sql_cate);
	$row_title= mysqli_fetch_array($query_cate);
?>


<h3>Hãng: <?php echo $row_title['hang'] ?></h3>
    	<ul class="product_list">
        <?php
		while($row_pro= mysqli_fetch_array($query_pro)){
		?>
    	<li>
        	<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
            <p class="title_product"><?php echo $row_pro['tensanpham'] ?></p>
            <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
            <p class="price_product"><?php echo number_format($row_pro['giasp'],0,',','.').'vnđ' ?></p>
            </a>
    	</li>
        <?php
		}
		?>
  		</ul>