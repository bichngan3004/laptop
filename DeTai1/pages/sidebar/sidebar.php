<div class="sidebar">
 <p>
         <form action="index.php?quanly=timkiem" method="POST">
            <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa" />
            <input type="submit" name="timkiem" value="Tìm kiếm" />
          </form>
     	</p>
	<ul class="list_sidebar">
    
	<?php      
        $sql_hang= "select * from tbl_hang order by id_hang desc ";
		$query_hang= mysqli_query($con,$sql_hang);
		while($row = mysqli_fetch_array($query_hang)){
	?>
    	<li><a href="index.php?quanly=hang&id=<?php echo $row['id_hang']; ?>"><?php echo $row['hang']; ?></a></li>
     <?php
		}
	 ?>
     <li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
	</ul>
</div>