<?php
include 'connection.php';
if(isset($_POST['submit'])){
//	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$f_name = $_POST['f_name'];
	$address = $_POST['address'];
	$c_password = $_POST['c_password'];
	$surname = $_POST['surname'];
	$phone = $_POST['phone'];

	if($email==null or $password==null or $f_name==null or $address==null or $c_password==null or $surname==null or $phone==null ){
		header("Location: http://localhost/library/index.php?id=1#reg");
	}elseif($password!=$c_password){
		header("Location: http://localhost/library/index.php?id=2#reg");
	}else{
		$h_pass = password_hash($password,PASSWORD_DEFAULT);

		$insert = "INSERT INTO registration(user,password,surname,firstname,address,email,phone_number) VALUES ('$email','$h_pass','$surname','$f_name','$address','$email','$phone')";
		$insert_conn = $conn->query($insert);
			if($insert_conn===true){
				header("Location: http://localhost/library/index.php?id=3#reg");
			}
	}




}

?>