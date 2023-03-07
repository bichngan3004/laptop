<?php
	if(isset($_POST['doimatkhau']))
	{
		$email = $_POST['email'];
		$matkhau_cu = md5($_POST['password_cu']);
		$matkhau_moi = md5($_POST['password_moi']);	
		$sql = "select * from tbl_dangky where email='".$email."' and matkhau='".$matkhau_cu."' limit 1";
		$row = mysqli_query($con,$sql);
		$count = mysqli_num_rows($row);
		if($count==1)
		{
			$sql_update = mysqli_query($con,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
			echo '<p style="color:green">Mật khẩu đã được thay đổi!</p>';
		}else
		{
			echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng, vui lòng nhập lại!</p>';	
		}
	}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="600" border="1">
    <tr>
      <td colspan="2" align="center">Đổi mật khẩu </td>
    </tr>
    <tr>
      <td width="268">Email</td>
      <td width="316">
      <input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td>Mật khẩu cũ</td>
      <td>
      <input type="password" name="password_cu" id="password" /></td>
    </tr>
     <tr>
      <td>Mật khẩu mới</td>
      <td>
      <input type="password" name="password_moi" id="password" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="doimatkhau" id="doimatkhau" value="Đổi mật khẩu" /></td>
    </tr>
  </table>
  </form>