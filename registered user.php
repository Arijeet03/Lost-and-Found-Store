<?php
session_start();
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('configure/database.php')
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- User Add Modal -->
<div class="modal fade" id="AddUserModul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <span class="email_error"></span>
          <input type="email" name="email" class="form-control email_id" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="">Roll Number</label>
          <input type="int" name="rollnumber" class="form-control" placeholder="Roll Number">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="pass" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="password" name="conpass" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="">Member Type</label>
          <input type="text" name="member" class="form-control" placeholder="Member Type">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="addUser" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


  <!-- User Delete Modal -->
  <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">
        <input type="text" name="delete_id" class="delete_user_id">
        <p>ARE YOU SURE YOU WANT TO DELETE</p>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="">Roll Number</label>
          <input type="int" name="rollnumber" class="form-control" placeholder="Roll Number">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="pass" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="">Member Type</label>
          <input type="text" name="member" class="form-control" placeholder="Member Type">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="DeleteUserbtn" class="btn btn-primary">Yes, Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>

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
              <li class="breadcrumb-item active">Registered Users v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
          <?php
          if(isset($_SESSION['status']))
          {
          echo "<h4>".$_SESSION['status']."</h4>";
         unset($_SESSION['status']) ;
        }
          ?>
<div class="card">
<!-- /.card-header -->
<div class="card-body">
    <h3 class="card-title">Registered Users
    </h3>
    <a href="#" data-toggle="modal" data-target="#AddUserModul" class="btn btn-primary btn-sm float-right"> Add User </a>
</div>
<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        <thead> 
            <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roll Number</th>
                    <th>Password</th>
                    <th>Member</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query="SELECT * FROM user";
                    $query_run= mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                      foreach($query_run as $row)
                      {
                        ?>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['roll'];?></td>
                    <td><?php echo $row['pass'];?></td>
                    <td><?php echo $row['member'];?></td>
                    <td><a href="registered-edit.php?user_id=<?php echo $row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                    <button type="button" value="<?php echo $row['id'];?>" class="btn btn-sm btn-danger deletebtn">Delete</a></td>
                  </tr>
                        <?php
                      }

                    }
                    else
                    {
                      ?>
                      <tr>
                        <td>No Record Found</td>
                      </tr>
                      <?php

                    }
                    ?>
      </tbody>
    </table>
  </div>
</div>
</div>
        </div>
</div>
</div>





        


<?php
include('includes/script.php');
?>
<script>
$(document).ready(function(){
  $('.email_id').keyup(function(e)
  {
    var email=$('.email_id').val();
    //console.log(email);
    $.ajax({
      type:"POST",
      url:"code.php",
      data:{
        'check_Email_btn':1,
        'email': email,
      },
      success:function(response){

      }
    })
  });
});
</script>

<script>$(document).ready(function()
{
  $('.deletebtn').click(function(e)
  {
    e.preventDefault();

    var user_id=$(this).val();
    //console.log(user_id);
    $('.delete_user_id').val(user_id);
    $('#DeleteModal').modal('show');
  });
});
<?php
include('includes/footer.php');
?>