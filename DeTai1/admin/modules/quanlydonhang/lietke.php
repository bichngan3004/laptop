<p>Liệt kê đơn hàng</p>
	<?php
    	$sql_lietke_dh= "select * from tbl_cart, tbl_dangky where tbl_cart.id_khachhang=tbl_dangky.id_dangky order by tbl_cart.id_khachhang desc";
		$query_lietke_dh= mysqli_query($con,$sql_lietke_dh);
    ?>
    <table border="1" width="50%" style="border-collapse:collapse;">
        	<tr>
             	<th>Id</th>
            	<th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Đia chỉ</th>
                <th>Email</th>
            	<th>Số điện thoại</th>
                <th>Tình trạng</th>
                <th>Quản lý</th>
            </tr>
            <?php
				$i=0;
				while($row=mysqli_fetch_array($query_lietke_dh))
				{
					$i++;
			?>
            <tr>
            	<td><?php echo $i; ?></td>
                <td><?php echo $row['code_cart']; ?></td>
                <td><?php echo $row['tenkhachhang']; ?></td>
                <td><?php echo $row['diachi']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['dienthoai']; ?></td>
                <td>
					<?php
						if($row['cart_status']==1)
						{
							echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';	
						}else
						{
							echo 'Đã xem';	
						}
					?>
                </td>
                <td>
                	<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
                </td>
            </tr>
            <?php
			}
			?>
    </table>
    