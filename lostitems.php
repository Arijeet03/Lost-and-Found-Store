<?php
session_start();
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('configure/database.php')
?>


<!-- Modal -->
<div class="modal fade" id="Lostitems" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Losted Items</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
      <form action="code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label for="">Item_Model</label>
          <input type="text" name="name" class="form-control" placeholder="typename">
        </div>
        <div class="form-group">
          <label for="">Item_Type</label>
          <input type="text" name="type" class="form-control" placeholder="Typemodel">
        </div>

        <div class="form-group">
          <label for="">Location</label>
          <input type="text" name="type" class="form-control" placeholder="Typemodel">
        </div>

        <div class="form-group">
          <label for="">Date</label>
          <input type="text" name="type" class="form-control" placeholder="Typemodel">
        </div>
      <div class="modal-footer">
      </div>
      </form>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="lost" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<section class="content mt-4">
    <div class="container">
    <div class="row'>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><H4>
                Lost Items
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#Lostitems">Add</a>
            </H4></div>
            <div class="card-body">
</div>
<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        <thead> 
            <tr>
                    <th>QUERY_ID</th>
                    <th>Item_Name</th>
                    <th>Item_Type</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mobile Phone</td>
                        <td>Electronics</td>
                        <td>G-Block</td>
                        <td>25-04-2023</td>
                        <td><a href="registered-edit.php?user_id=<?php echo $row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                    <button type="button" value="<?php echo $row['id'];?>" class="btn btn-sm btn-danger deletebtn">Delete</a></td>
                  </tr>
                    </tr>
                    <tr>
                    <td>2</td>
                        <td>Mobile Phone</td>
                        <td>Electronics</td>
                        <td>B-Block</td>
                        <td>27-04-2023</td>
                        <td><a href="registered-edit.php?user_id=<?php echo $row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                    <button type="button" value="<?php echo $row['id'];?>" class="btn btn-sm btn-danger deletebtn">Delete</a></td>
                  </tr>
                    </tr>
                    <tr>
                    <td>3</td>
                        <td>Calculator</td>
                        <td>Electronics</td>
                        <td>G-Block</td>
                        <td>15-04-2023</td>
                        <td><a href="registered-edit.php?user_id=<?php echo $row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                    <button type="button" value="<?php echo $row['id'];?>" class="btn btn-sm btn-danger deletebtn">Delete</a></td>
                  </tr>
                    </tr>
                    <tr>
                    <td>4</td>
                        <td>Laptop</td>
                        <td>Electronics</td>
                        <td>CS Building</td>
                        <td>25-04-2023</td>
                        <td><a href="registered-edit.php?user_id=<?php echo $row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                    <button type="button" value="<?php echo $row['id'];?>" class="btn btn-sm btn-danger deletebtn">Delete</a></td>
                  </tr>
                    </tr>
                    <tr>
                    <td>5</td>
                        <td>Key</td>
                        <td>Object</td>
                        <td>CS Building</td>
                        <td>12-03-2023</td>
                        <td><a href="registered-edit.php?user_id=<?php echo $row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                    <button type="button" value="<?php echo $row['id'];?>" class="btn btn-sm btn-danger deletebtn">Delete</a></td>
                  </tr>
                    </tr>
                    <tr>
                    <td>6</td>
                        <td>Bottle</td>
                        <td>Stationary</td>
                        <td> </td>
                        <td>12-03-2023</td>
                        <td><a href="registered-edit.php?user_id=<?php echo $row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                    <button type="button" value="<?php echo $row['id'];?>" class="btn btn-sm btn-danger deletebtn">Delete</a></td>
                  </tr>
                    </tr>
                    <tr>
                    <td>7</td>
                    <td>Pen</td>
                        <td>Stationary</td>
                        <td>TAN 203</td>
                        <td>12-04-2023</td>                         <td><a href="registered-edit.php?user_id=<?php echo $row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                    <button type="button" value="<?php echo $row['id'];?>" class="btn btn-sm btn-danger deletebtn">Delete</a></td></tr>
                        <tr>
                        <td>8</td>
                        <td>Casio Watch</td>
                        <td>Electronics</td>
                        <td>Dont Know</td>
                        <td>12-02-2023</td>
                        <td><a href="registered-edit.php?user_id=<?php echo $row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                    <button type="button" value="<?php echo $row['id'];?>" class="btn btn-sm btn-danger deletebtn">Delete</a></td>
                  </tr>
                    </tr>
                  </tbody>
    </table>
</div>

</div>
</div>
</div>
            </div>
        </div>
    </div>
    </div>
</section>

    

<?php
include('includes/script.php');
?>
<?php
include('includes/footer.php');
?>