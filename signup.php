<?php

session_start();
header('location:login.php');


$con = mysqli_connect('localhost','root', 'Olamide97');

mysqli_select_db($con, 'userregister');

$username = $_POST['username'];
$password = $_POST['password'];

$s = " select * from usertable where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Username has already been taken";
}else{
    $reg = "insert into usertable(username, password) values ('$username', '$password')";
    mysqli_query($con, $reg);
    echo"Registration successful";
}

?>