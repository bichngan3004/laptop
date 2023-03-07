<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		
    	$sql_sua_sp= "select * from tbl_sanpham where id_sanpham='$_GET[idsanpham]' limit 1";
		$query_sua_sp= mysqli_query($con,$sql_sua_sp);
    ?>
	<p>Sua san pham</p>
  
    	 <table border="1" width="50%" style="border-collapse:collapse;">
    <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php  echo $_GET['idsanpham']?>  enctype="multipart/form-data" >
        <?php
			while($row=mysqli_fetch_array($query_sua_sp)){
			
		?>
        	<tr>
            	<td>Tên sản phẩm</td>
                <td><input type="text" value="<?php echo $row['tensanpham']?>" name="tensanpham"/></td>
            </tr>
            <tr>
            	<td>Mã sản phẩm</td>
                <td><input type="text" value="<?php echo $row['masp']?>" name="masp"/></td>
            </tr>
            <tr>
            	<td>Giá sản phẩm</td>
                <td><input type="text" value="<?php echo $row['giasp']?>" name="giasp"/></td>
            </tr>
            <tr>
            	<td>Số lượng</td>
                <td><input type="text"  value="<?php echo $row['soluong']?>" name="soluong"/></td>
            </tr>
            <tr>
            	<td>Hình ảnh</td>
                <td>
                	<input type="file" name="hinhanh"/>
                    <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>" width="150px " />
                </td>
            </tr>
            <tr>
            	<td>Tóm tắt</td>
                <td><textarea rows="10" name="tomtat" style="resize: none"><?php echo $row['tomtat']?></textarea></td>
            </tr>
             <tr>
            	<td>Nội dung</td>
                <td><textarea rows="10" name="noidung" style="resize: none"> <?php echo $row['noidung']?></textarea></td>
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
								if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
						?>
                        	<option selected="selected" value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                         <?php
							}
							else
							{
						 ?>
                         <option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                         <?php
							}
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
												
							$sql_danhmuc= "select * from tbl_danhmuc order by id_danhmuc desc ";
							$query_danhmuc= mysqli_query($con,$sql_danhmuc);
							while($row_danhmuc=mysqli_fetch_array($query_danhmuc))
							{
								if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
						?>
                        	<option selected="selected" value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['hang']?></option>
                         <?php
							}
							else
							{
						 ?>
                         <option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['hang']?></option>
                         <?php
							}
							}
						 ?>
                    </select>
                </td>
            </tr>
            
            
            
            
             <tr>
            	<td>Tình trạng</td>
                <td>
                	<select name="tinhtrang">
                    	<?php
							if($row['tinhtrang']==1)
							{
						?>
                    	<option value="1" selected="selected">Kích hoạt</option>
                        <option value="0" >Ẩn</option>
                        <?php
							}
							else
							{
						?>
                        	<option value="1">Kích hoạt</option>
                        	<option value="0" selected="selected" >Ẩn</option>
                        <?php
							}
						?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="suasanpham" value="Sửa sản phẩm"/></td>
            </tr>
        </form>
        <?php
			}
		?>
    </table>
</body>
</html>