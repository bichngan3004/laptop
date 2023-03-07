<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    <p style="text-align:center;font-weight:bold;">THÊM SẢN PHẨM</p>
    <table border="1" width="100%" style="border-collapse:collapse;">
    	<form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data" >
        	<tr>
            	<td>Tên sản phẩm</td>
                <td><input type="text" name="tensanpham"/></td>
            </tr>
            <tr>
            	<td>Mã sản phẩm</td>
                <td><input type="text" name="masp"/></td>
            </tr>
            <tr>
            	<td>Giá sản phẩm</td>
                <td><input type="text" name="giasp"/></td>
            </tr>
            <tr>
            	<td>Số lượng</td>
                <td><input type="text" name="soluong"/></td>
            </tr>
            <tr>
            	<td>Hình ảnh</td>
                <td><input type="file" name="hinhanh"/></td>
            </tr>
            <tr>
            	<td>Tóm tắt</td>
                <td><textarea rows="10" name="tomtat"  style="resize: none"></textarea></td>
            </tr>
             <tr>
            	<td>Nội dung</td>
                <td><textarea rows="10" name="noidung" style="resize: none"></textarea></td>
            </tr>
             <tr>
            	<td>Danh mục sản phẩm</td>
                <td>
                	<select name="danhmuc">
                    	<?php
												
							$sql_danhmuc= "select * from tbl_danhmuc order by id_danhmuc desc ";
							$query_danhmuc= mysqli_query($con,$sql_danhmuc);
							while($row_danhmuc=mysqli_fetch_array($query_danhmuc))
							{
								
						?>
                        	<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                         <?php
							}
						 ?>
                    </select>
                </td>
                </tr>
                <tr>
                <td>Hãng</td>
                <td>
                	<select name="hang">
                    	<?php
												
							$sql_hang= "select * from tbl_hang order by id_hang desc ";
							$query_hang= mysqli_query($con,$sql_hang);
							while($row_hang=mysqli_fetch_array($query_hang))
							{
								
						?>
                        	<option value="<?php echo $row_hang['id_hang'] ?>"><?php echo $row_hang['hang']?></option>
                         <?php
							}
						 ?>
                    </select>
                </td>
            </tr>
             <tr>
            	<td>Tình trạng</td>
                <td>
                	<select name="tinhtrang">
                    	<option value="1">Kích hoạt</option>
                        <option value="0" >Ẩn</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center"><input type="submit" name="themsanpham" value="Thêm sản phẩm"/></td>
            </tr>
        </form>
    </table>

</body>
</html>