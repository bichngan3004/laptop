<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		
    	$sql_lietke_hang= "select * from tbl_hang order by id_hang desc";
		$query_lietke_hang= mysqli_query($con,$sql_lietke_hang);
    ?>
	<p>Liệt kê hãng</p>
    <table border="1" width="50%" style="border-collapse:collapse;">
        	<tr>
             	<th>Id</th>
                <th>Hãng</th>
                <th>Quản lý</th>
            </tr>
            <?php
				$i=0;
				while($row=mysqli_fetch_array($query_lietke_hang))
				{
					$i++;
				
			?>
            <tr>
            	<td><?php echo $i; ?></td>
                <td><?php echo $row['hang']; ?></td>
                <td>
                	<a href="modules/quanlyhang/xuly.php?idhang=<?php echo $row['id_hang']?>">Xóa</a> | 
                    <a href="?action=quanlyhang&query=sua&idhang=<?php echo $row['id_hang']?>">Sửa</a>
                </td>
            </tr>
            <?php
			}
			?>
    </table>
    
</body>
</html>