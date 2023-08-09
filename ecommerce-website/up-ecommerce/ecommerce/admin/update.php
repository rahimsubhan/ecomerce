<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<body>

<?php

$id = $_GET['Id'];
include 'config.php';
$Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE Id = $id ");
$data = mysqli_fetch_array($Record); 
?>


<form action = "insert.php" method="post" enctype="multipart/form-data">
<div class="col-md-5  m-auto border my-3"> 
  <div class = "mb-3">
  <p class = "text-center my-3 text-warning fs-8 ">Product Update </div>

    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Product Name:</label>
  <input type="text"  value = "<?php echo $data['PName'] ?> " name ="Pname" class="form-control" id="formGroupExampleInput" placeholder="Enter Product Name" required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Product Price:</label>
  <input type="text"  value= " <?php echo $data['PPrice'] ?> " name ="Pprice"class="form-control" id="formGroupExampleInput2" placeholder="Enter Product Price" required>
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Add Product Image</label>
  <input type="file"  name ="Pimage" class="form-control"><br>
  <img src = "<?php echo $data['PImage'] ?>"  height = '150px' width = '200px'>
</div>

<div class="mb-3">
  <label class="form-label">Select Page Category</label>
  <select class ="form-select" name ="Pages" required>
    <option value="Home">Home</option>
    <option value="Laptop">Laptop</option>
    <option value="Bag">Bag</option>
    <option value="Mobile">Mobile</option>
</select>
</div>
<input type = "hidden"  name ="id" value ="<?php echo $data['Id'] ?>">
<button  name ="update" class ="bg-danger fs-4 fw-bold my-3 form-control text-light">Update </button>

</form>

</div>
<div>
</div>


<!-- PHP UPDATE CODE -->

   <?php
    if(isset($_POST['update'])){
    $id = $_POST ['id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "uploadimage/". $image_name;
     move_uploaded_file($image_loc, "uploadimage/".$image_name);
     $product_category = $_POST['Pages'];

     include 'config.php';

     mysqli_query($con, "UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',`PImage`='$img_des',`PCategory`='$product_category' WHERE Id = $id");
     header("location:index.php");

   }
     ?>

</body>
</html>