<?php
session_start();
include('configure/database.php');

if(isset($_POST['check_Emailbtn']))
{
    $check="SELECT email FROM user WHERE email='$email'";
    $checkmail_run=mysqli_query($con,$check);
    $checkmail_run=mysqli_query($con,$check);
    if(mysqli_num_rows($checkmail_run)>0)
    {
       
}
else{
    
}
}

if (isset($_POST['addUser']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $roll=$_POST['rollnumber'];
    $pass=$_POST['pass'];
    $conpass=$_POST['conpass'];
    $member=$_POST['member'];

  if($pass==$conpass)
  {
    $check="SELECT email FROM user WHERE email='$email'";
    $checkmail_run=mysqli_query($con,$check);
    $checkmail_run=mysqli_query($con,$check);
    if(mysqli_num_rows($checkmail_run)>0)
    {
       // echo "Email Already Registered";
        $_SESSION['status']="Email Already Registered";
    header("Location: registered user.php");
exit;    
}
    else{
        $user_query= "INSERT INTO user(name,email,roll,pass,member) VALUES ('$name','$email','$roll','$pass','$member')";
    $user_query_run= mysqli_query($con,$user_query);
if($user_query_run)
{
    $_SESSION['status']="User Added";
    header("Location: registered user.php");
}
else 
{
    $_SESSION['status']="User Not Added";
    header("Location: registered user.php");
}
    }
}else{
    $_SESSION['status']="Password doesnot match";
    header("Location: registered user.php");
} 
}

if(isset($_POST['updateUser']))
{
    $user_id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $roll=$_POST['rollnumber'];
    $pass=$_POST['pass'];
    $member=$_POST['member'];

    $query="UPDATE user SET name='$name', email='$email', roll='$roll', pass='$pass', member='$member' WHERE id='$user_id'";
$query_run=mysqli_query($con,$query);
if($query_run)
{
    $_SESSION['status']="User Updated";
    header("Location: registered user.php");
}
else
{
    $_SESSION['status']="User Not Updated";
    header("Location: registered user.php");
}
}


if(isset($_POST['DeleteUserbtn']))
{
    $user_id=$_POST['delete_id'];
    $query="DELETE FROM user WHERE id='$user_id'";
    $query_run=mysqli_query($con,$query);
    if($query_run)
{
    $_SESSION['status']="User Delete";
    header("Location: registered user.php");
}
else
{
    $_SESSION['status']="User Not Delete";
    header("Location: registered user.php");
}
}
?>