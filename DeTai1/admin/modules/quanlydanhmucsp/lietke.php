<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		
    	$sql_lietke_danhmucsp= "select * from tbl_danhmuc order by thutu desc";
		$query_lietke_danhmucsp= mysqli_query($con,$sql_lietke_danhmucsp);
    ?>
	<p>Liệt kê danh mục sản phẩm</p>
    <table border="1" width="50%" style="border-collapse:collapse;">
        	<tr>
             	<th>Id</th>
            	<th>Tên danh mục</th>
                <th>Quản lý</th>
            </tr>
            <?php
				$i=0;
				while($row=mysqli_fetch_array($query_lietke_danhmucsp))
				{
					$i++;
				
			?>
            <tr>
            	<td><?php echo $i; ?></td>
                <td><?php echo $row['tendanhmuc']; ?></td>
                <td>
                	<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> | 
                    <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
                </td>
            </tr>
            <?php
			}
			?>
    </table>
    
</body>
</html>