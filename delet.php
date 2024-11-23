
<?php
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
// sql to delete a record
 $sql = "DELETE FROM users WHERE id={$_GET['id']}";
 if (mysqli_query($conn, $sql)) {
 // echo "Record deleted successfully";
 header("location: read.php");
 } else {
  echo "Error deleting record: " . 
mysqli_error($conn);
 }
 ?>

<