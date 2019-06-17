<?php
session_start();
//----------------Connect to DB --------------------
//$host = "localhost";
//$user = "root";
//$conn = mysqli_connect($host, $user, $password, $database);
//if (!$conn)
//{
//	echo 'Connection Unavailable';
//}
//else
//	$password = "";
//$database = "library";
//
//{
include 'connection.php';

	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$d_password='';
	$sql = "SELECT * FROM `registration`WHERE user='$name'";
	$result = $conn->query($sql);
	if($result->num_rows>0){
	while ($row=$result->fetch_assoc()){
		$d_password = $row['password'];
	}
		if(password_verify($pass,$d_password)){
			echo "true";
			$_SESSION['user'] = $name;
		}else{
			echo "PASSWORD INCORRECT";
		}
	}else{
		echo "NO SUCH USER EXIST";
	}

?>