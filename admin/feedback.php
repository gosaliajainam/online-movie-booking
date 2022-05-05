<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Feedback Page</title>


<?php session_start(); 
if (!isset($_SESSION['admin'])) {
  header("location:login.php");
}
?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Feedback</h2>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_feedback_modal" class="btn btn-primary btn-sm">Feedback detail</a>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>Name</th>
              <th>email</th>
              <th>subject</th>
              <th>massage</th>
            </tr>
          </thead>
          <tbody id="product_list">
           <?php
include_once 'Database.php';
$result = mysqli_query($conn,"SELECT * FROM feedback");

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)) {
    $id=$row['id'];?>
    <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['massage'];?></td>
              
              
              <td><button data-toggle="modal" type="button" data-target="#edit_feedback_modal<?php echo $id;?>" class="btn btn-primary btn-sm">Edit Movie</button></td>
              <td><button data-toggle="modal" type="button" data-target="#delete_feedback_modal<?php echo $id;?>" class="btn btn-danger btn-sm">Delete Movie</button></td>
            </tr>

 <div class="modal fade" id="delete_feedback_modal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Movie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="insert_movie" action="insert_data.php" method="post">
          <h4> Yor Sour This id "<?php echo $row['id'];?>" is delete.</h4>
          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="submit" name="deletefeedback" id="deletefeedback" value="OK" class="btn btn-primary">
          </form>

      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="edit_feedback_modal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="insert_movie" action="insert_data.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Name</label>
                <input type="hidden" name="e_id" value="<?php echo $row['id'];?>">
                <input class="form-control" name="edit_feedback_name" id="edit_name" value="<?php echo $row['name'];?>">
                <small></small>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="edit_feedback_email" id="edit_email" value="<?php echo $row['email'];?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Massage</label>
                <input class="form-control" name="edit_feedback_massage" id ="edit_massage" value="<?php echo $row['massage']; ?>">
              </div>
            </div>
            <div class="col-12">
            
              <input type="submit" name="updatefeedback" id="updatefeedback" value="update" class="btn btn-primary">
            </div>
          </div>
          
        </form>
        <div id="preview"></div>
      </div>
    </div>
  </div>
</div> 
  <?php

  }
}
?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>




<!-- Add Product Modal start -->
<div class="modal fade" id="add_feedback_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Movie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="myform" id="insert_movie" action="insert_data.php" method="post" enctype="multipart/form-data" onsubmit="return validateform()">
          <div class="row">
            <div class="col-12">
              <div class="col-12">
              <div class="form-group">
                <label>Enter Your Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Enter Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter Name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Massage</label>
                <textarea class="form-control" name="massage" id="massage" placeholder="Enter Your Massage"></textarea>
              </div>
            </div>
      
           <div class="col-12">
              <input type="submit" name="add_feedback" class="btn btn-primary add-product" value="Add Product">
            </div>
          </div>
          
        </form>
        <div id="preview"></div>
      </div>
    </div>
  </div>
</div>
<!-- Add movie Modal end -->



<?php include_once("./templates/footer.php"); ?>


<script>  
function validateform(){  
var name=document.myform.name.value;  
var email=document.myform.email.value;  
var massage=document.myform.massage.value;  

if (name==""){  
  alert("Requre Name");  
  return false;  
}else if(email==""){  
  alert("Requre email Name");  
  return false;  
  } 
  else if(massage==""){  
  alert("Requre Massage Name");  
  return false;  
  }  
}

</script>
