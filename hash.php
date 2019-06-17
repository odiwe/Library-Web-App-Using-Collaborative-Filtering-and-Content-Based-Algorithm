<?php
/**
 * Created by PhpStorm.
 * User: ODIWE JOHN
 * Date: 3/27/2017
 * Time: 11:33 AM
 */


$pass = $_POST['pass'];

$pasword = password_hash($pass,PASSWORD_DEFAULT);

echo $pasword;