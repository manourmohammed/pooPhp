

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

<div class="container my-5">
    <h2>List of users from database</h2>
    <a  class="btn btn-primary" href="login.php" role="button">Signup</a>

    <br>
    <br>
    <table class="table">
       <thead>
        <tr>
            <th>ID</th>
            <th>username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php 
include "conx.php";

    $sql = "SELECT id, username, email FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['username']}</td>
        <td>{$row['email']}</td>
        <td>
            <a href='update.php?id={$row['id']}' class='btn btn-primary btn-sm'>Edit</a> 
            <a href='delet.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
        </td>
    </tr>";
    }
    } else {
    echo "0 results";
    }
 ?>
 

        
        </tbody>
        
    </table>
    </div>
</body>
</html>
