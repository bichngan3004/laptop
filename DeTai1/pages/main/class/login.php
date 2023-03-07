<?php
class login{
	private function connect()
    {
	$con= mysqli_connect("localhost","tien","123456","web_mysqli");
	if(!$con)
	{
		die("Khong ket noi duoc den CSDL");
		exit();
	}
	else
	{
		mysqli_set_charset($con,"utf8");
		return $con;
	}
	}
public function myloginKH($email,$pass)
	{
		$pass=md5($pass);
		$link=$this->connect();
		$sql="select *from tbl_dangky where email='$email' and matkhau='$pass' limit 1";
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i==1)
		{
			while($row=@mysqli_fetch_array($ketqua))
			{
			$email=$row['email'];
			$pass=$row['matkhau'];
			session_start();
			$_SESSION['email']=$email;
			$_SESSION['matkhau']=$pass;
			}
			return 1;
		}
		else
		{
			return 0;
		}
	}
}
 ?>