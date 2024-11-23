<?php
session_start();
include "conx.php";


if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['pass'];
    $_SESSION['USER'] = $user;

    if ($user === "MANOUR" && $password === "MANOUR@2025") {
        header("Location: read.php");
        exit();
    }

    $req = "SELECT * FROM users WHERE username='$user' ";
    $result = mysqli_query($conn, $req);

    if ($row = mysqli_fetch_assoc($result)) {
        if($user == $row['username']){
            header("Location: index.php");
            exit();
        }

    } else {

        echo "<p style='color: red;'>Compte n'existe pas ou informations incorrectes.</p>";
    }


}
?>
