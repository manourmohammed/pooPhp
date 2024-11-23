<?php
global $conn;
$username="";
$email="";
include("conx.php");

       
    

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $sql = "SELECT username, email FROM users WHERE id={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
       $username = $row["username"];
       $email = $row["email"];

}   

    }
}
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];

$sql = "UPDATE users SET username='$username',email='$email' WHERE 
id={$_GET['id']}";
 if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
  header("location: read.php");
 } else {
  echo "Error updating record: " . 
mysqli_error($conn);
 }
}

    


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5 ">

        <h2>Update</h2>



 <!-- <div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong> error message</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
  </button>
  </div> -->

        <br>
        <form method="post">
            <div class="row mb-3">
                    <label class="col-form-label col-sm-1" for="fname">username:</label>
                    <div class="col-sm-6">
                        <input  class="form-control" type="text" id="fname" name="username" value="<?php echo  $username  ?>">
                    </div>
            </div>
            <div class="row mb-3">
                    <label class="col-form-label col-sm-1" for="lname">Email:</label>
                    <div class="col-sm-6">
                        <input  class="form-control" type="text" id="lname" name="email" value="<?php echo $email ?>">
                    </div>
            </div>
           



<!-- <div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>success Message</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>   -->
      

            <div class="row mb-3">
                    <div class="offset-sm-1 col-sm-3 d-grid">
                        <button name="submit" type="submit" class=" btn btn-primary ">Signup</button>
                    </div>
                    <div class="col-sm-1 col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" >Login</a>
                    </div>
            </div>
        </form>

    </div>


</body>
</html>
