<?php

$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "lost_and_found";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("404 ERROR");
}
    $member_type=$_POST["member_type"];
    $username=$_POST["Username"];
    $rollno=$_POST["rollno"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    if(!empty($username) && !empty($password) && !is_numeric(($username)))
    {
    $user_id=random_num(20);
    $query="insert into user_data(user_id,username,rollno,email,password,member_type) values('$user_id','$username','$rollno','$email','$password','$member_type')";
    mysqli_query($con,$query);
    }
    else
    {
        echo "Please Enter Correct Data";
    }

 
?>