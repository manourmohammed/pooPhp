<?php

include('conx.php');
class Config
{
    private $name;
    private $email;
    private $password;
    private $confirme;

    private $connexion;

    /**
     * @param mixed $connexion
     */
    public function setConnexion($connexion): void
    {
        if ($connexion !== null) {
            $db = new Conx();
            $this->connexion = $db->getConexion();
        } else {
            $this->connexion = $connexion;
        }
    }



    public function __construct($name, $email, $password, $confirme)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->confirme = $confirme;

    }


    public function getConfirme()
    {
        return $this->confirme;
    }


    public function setConfirme($confirme)
    {
        $this->confirme = $confirme;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function insertClient($table, $conexion){
        $this->setConnexion($conexion);
        $sql = "INSERT INTO $table (username, email, password) VALUES ('" . $this->getName() . "','" . $this->getEmail(). "','" . $this->getPassword() . "');";


    if (mysqli_multi_query($conexion, $sql)) {
        // echo "New records created successfully";
    } else {
        echo "Error: "  .
            mysqli_error($conexion). "<br>" ;

    }

    }

public static function  selectAllClients($tableName,$conn){
    $sql = "SELECT * FROM $tableName";
    echo  mysqli_query($conn, $sql);
 }
    static function selectClientById($tableName,$conn,$id){
        $sql = "SELECT * FROM $tableName WHERE id = $id";
        echo  mysqli_query($conn, $sql);
    }
    static function updateClient($client,$tableName,$conn,$id)
    {
        $sql = "UPDATE $tableName SET username={$client->name}, email={$client->email} WHERE 
id={$id}";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
            header("location: read.php");
        } else {
            echo "Error updating record: " .
                mysqli_error($conn);
        }
    }
    public static function deleteClient($tableName,$conn,$id){
        $sql = "DELETE FROM $tableName WHERE id={$id}";
        if (mysqli_query($conn, $sql)) {
            header("location: read.php");
        } else {
            echo "Error deleting record: " .
                mysqli_error($conn);
        }

    }



}




//if(isset($_POST['submiteValue'])){
//if(empty($_POST['username'])){
//$name="le nom est vide";
//}
//else if(empty($_POST['email'])){
//    $email="email est vide";
//}
//else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//    $email = "L'email est invalide";
//}
//else if (empty($_POST['password'])) {
//    $password = "Le mot de passe est vide";
//}
//else if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).{8,}$/', $_POST['password'])) {
//    $password = "Le mot de passe doit contenir au moins 8 caractères, une majuscule, un chiffre et un caractère spécial.";
//}
//else if ($_POST['password'] != $_POST['confirm_password']) {
//    $confirme = "Les mots de passe ne correspondent pas";
//}
//
//
//else{
//    $_SESSION['username']=$_POST['username'];
//    $_SESSION['email']=$_POST['email'];
//    $_SESSION['password']=$_POST['password'];
//
//    $sql = "INSERT INTO users (username, email, password) VALUES ('" . $_SESSION['username'] . "','" . $_SESSION['email'] . "','" . $_SESSION['password'] . "');";
//
//
//    if (mysqli_multi_query($conn, $sql)) {
//        // echo "New records created successfully";
//    } else {
//        echo "Error: "  .
//            mysqli_error($conn). "<br>" ;
//
//    }
//    header('location:sing up.php');
//
//
//
//}
//
//}





?>