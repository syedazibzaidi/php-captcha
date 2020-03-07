<?php

if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$captcha=$_POST['captcha'];
	if($username=="aptech" && $password=="aptech")
	{
		if($_SESSION['captcha']==$captcha)
		{
			echo "login sucessfully by Captcah!";
		}
		else
		{
			echo "login Does Not sucessfully by Captcah!";
		}
	}
	else
	{
		echo "Username or password may be wrong!";
	}
	
}
/*
$conn = mysqli_connect("localhost", "root", "", "fahad");
		if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql="select * from logintbl123 where username='".$username."' && password ='".$password."' limit 1";
		$result =mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) == 1)
		{
			echo "Login Successfully";
		}
		else
		{
			echo "wrong password/username";
			
		}
		
		}
*/
?>