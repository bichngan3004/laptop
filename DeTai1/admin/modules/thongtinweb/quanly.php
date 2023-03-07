<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>Quản lý thông tin website</p>
<?php
	$sql_lh="select * from tbl_hotro where id=1";
	$query_lh= mysqli_query($con,$sql_lh);
?>
<table border="1" width="100%" style="border-collapse:collapse;">
<?php
				while($row=mysqli_fetch_array($query_lh))
				{
			?>
    	<form method="POST" action="modules/thongtinweb/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data" >
        	
             <tr>
            	<td>Thông tin liên hệ</td>
                <td><textarea rows="10" name="thongtinlienhe" style="resize: none"><?php echo $row['thongtinlienhe'] ?></textarea></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="submit" name="submitlienhe" value="Cập nhật" /></td>
            </tr>
             <?php
				}
			 ?>
        </form>
    </table>
    <?php
		
    	$sql_lietke_yeucau= "select * from tbl_ychotro order by id_hotro desc";
		$query_lietke_yeucau= mysqli_query($con,$sql_lietke_yeucau);
    ?>
<p>Yêu cầu hỗ trợ</p>
    <table border="1" width="99%" style="border-collapse:collapse;">
        	<tr>
            	<th width="9%">STT</th>
             	<th width="21%">Tên khách hàng</th>
            	<th width="15%">Số điện thoại</th>
                <th width="16%">Email</th>
                <th width="30%">Nội dung</th>
            </tr>
            <?php
				$i=0;
				while($row=mysqli_fetch_array($query_lietke_yeucau))
				{
					$i++;
				
			?>
            <tr>
            	<td><?php echo $i; ?></td>
                <td><?php echo $row['tenkhachhang']; ?></td>
                <td><?php echo $row['sodienthoai']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['noidung']; ?></td>
                <td width="9%">
					<?php
						if($row['xuly']==1)
						{
							echo '<a href="modules/thongtinweb/xuly.php?chuaxuly='.$row['id_hotro'].'">Chưa xử lý</a>';	
						}else
						{
							echo 'Đã xử lý';	
						}
					?>
                </td>
            </tr>
            <?php
			}
			?>
    </table>

</body>
</html>