<?php
session_start();

// if (isset($_SESSION['user']))
// {
// 	header("books3-sidebar.html")
// }
// function test_input($data)
// {
// 	$data = trim($data);
// 	$data = htmlspecialchars($data)
// 	return $data;
// }
//----------------Connect to DB --------------------
$host = "localhost";
$user = "root";
$password = "";
$database = "library";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn)
{
	echo 'Connection Unavailable';
}
else
{

	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$err;
	$sql = "SELECT * FROM `admin`";
	$result = mysqli_query($conn,$sql);
	while ($row =mysqli_fetch_assoc($result))
	{
		$Name = $row["admin"];
		$Password = $row["password"];
		if (trim($Name) == trim($name) && trim($Password) == trim($pass))
		{
			$status =  "true";
			$_SESSION['user'] = $Name;
			break;
		}
		else if (trim($Name) != trim($name) || trim($Password) != trim($pass))
		{
			//print_r($_POST["pass"]);
			$status = "Wrong username or password";

		}
	}
	
		echo $status;
}
?>