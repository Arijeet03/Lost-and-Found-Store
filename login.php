<?php
session_start();
include('includes/header.php');
include('configure/database.php')
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login_LOST_AND_FOUND</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <form action="POST">
    <div class="login_form_container">
        <?php include('messsage.php'); ?>
      <div class="login_form" Method="POST">
        <h2>Login</h2>
        <div class="input_group">
          <i class="fa fa-user"></i>
          <input type="text" name="user" placeholder="Username" name="login" class="input_text" autocomplete="off" />
        </div>
        <div class="input_group">
        <i class="fa fa-unlock-alt"></i>
          <input type="password" name="pass"  placeholder="Password" name="pass" class="input_text" autocomplete="off" />
        </div>
        <div class="button_group" id="login_button">
          <button type="submit" name="login_button" class="btn btn-primary btn-block">Submit</a>
        </div>
        <div class="fotter" id="external_links">
          <a>Forgot Password ?</a>
          <a href="register.php">SignUp <i class="fa fa-sign-in"></i> </a>
        </div>
      </div>
    </div>
</form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="login.js"></script>
  </body>
</html>

<?php
include('includes/script.php');
?>
