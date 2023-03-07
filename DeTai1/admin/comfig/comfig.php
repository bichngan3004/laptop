	<?php
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
	?>