<?php
session_start();
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('configure/database.php')
?>


<!-- Modal -->
<div class="modal fade" id="CategoryModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Category</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
      <form action="code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label for="">Item_Type</label>
          <input type="text" name="name" class="form-control" placeholder="typename">
        </div>
        <div class="form-group">
          <label for="">Type_Model</label>
          <input type="text" name="type" class="form-control" placeholder="Typemodel">

      <div class="modal-footer">
      </div>
      </form>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="cat" class="btn btn-primary">Save</button>
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
                Category
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#CategoryModel">Add</a>
            </H4></div>
            <div class="card-body">
</div>
<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        <thead> 
            <tr>
                    <th>ID</th>
                    <th>Item_Type</th>
                    <th>Item_Model</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>Electronics</td>
                        <td>Mobile Phone</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Electronics</td>
                        <td>Calculator</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Electronics</td>
                        <td>Watch</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Electronics</td>
                        <td>Laptop</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Stationary</td>
                        <td>Pen</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Stationary</td>
                        <td>Pencil</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Objects</td>
                        <td>Room Key</td>
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