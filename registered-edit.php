<?php
session_start();
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('configure/database.php')
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registered Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit - Registered Users v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
<div class="card">
<!-- /.card-header -->
<div class="card-body">
    <h3 class="card-title">Edit - Registered Users
    </h3>
    <a href="registered user.php" class="btn btn-danger btn-sm float-right">BACK</a>
    <div class="card-body">
       <div class="row">
        <div class="col-md-6">
        <form action="code.php" method="POST">
      <div class="modal-body">
<?php
if(isset($_GET['user_id']))
{
$user_id=$_GET['user_id'];
$query= "SELECT * FROM user WHERE id='$user_id' LIMIT 1";
$query_run=mysqli_query($con,$query);

if(mysqli_num_rows($query_run)>0)
{
foreach($query_run as $row)
{
   ?>
   <input type="hidden" name="id" value="<?php echo $row['id']?>">
<div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="">Roll Number</label>
          <input type="int" name="rollnumber" value="<?php echo $row['roll'] ?>" class="form-control" placeholder="Roll Number">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="pass" value="<?php echo $row['pass'] ?>" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="">Member Type</label>
          <input type="text" name="member" value="<?php echo $row['member'] ?>" class="form-control" placeholder="Member Type">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="updateUser" class="btn btn-info">Update</button>
      </div>
      </form>
   <?php

}
}
else{
    echo "<h4>No record Found</h4>";
}
}
?>


        
        </div>
       </div> 
</div>
</div>
        </div></div></div></div></div>

</div>





        


<?php
include('includes/script.php');
?>
<?php
include('includes/footer.php');
?>