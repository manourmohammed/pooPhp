<?php
class Conx{
   private $hostel = "localhost";
  private  $root = "root";
   private $password="";

   private $conexion;


    public function getHostel()
    {
        return $this->hostel;
    }


    public function setHostel($hostel)
    {
        $this->hostel = $hostel;
    }


    public function getRoot()
    {
        return $this->root;
    }


    public function setRoot($root)
    {
        $this->root = $root;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }





    public function getConexion()
    {
        return $this->conexion;
    }


    public function setConexion($conexion)
    {
        $this->conexion = $conexion;
    }


    public function __construct(){
        $this->setConexion(mysqli_connect($this->getHostel(), $this->getRoot(),$this->getPassword() ,"ndatabase"));
        if(!$this->getConexion()){
            die("connection failed:".mysqli_connect_error());
        }
    }

    public function createDb($database){
        $result=mysqli_query($this->getConexion(),"CREATE DATABASE $database");
if(!$result){
    die("ne peut pas cree la base de donnre".mysqli_error($this->getConexion()));
}
else{
    echo "Create successfuly";
}
    }
 public   function createTable($query){
        $sql= "CREATE TABLE $query (id INT(6) UNSIGNED  AUTO_INCREMENT PRIMARY KEY , 
username VARCHAR(60) NOT NULL 
, email VARCHAR(50) UNIQUE ,
password  VARCHAR(60), 
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
ON UPDATE CURRENT_TIMESTAMP
)";
$result=mysqli_query($this->getConexion(),$sql);
if($result){
    echo "create table";
}else{
    die("table failed".mysqli_error($this->getConexion()));
}
    }

}

$conx = new Conx();
//$conx->createDb("NDataBase");
$conx->createTable("useres");


//echo "Connected successfuly .<br>  ";


/*$result=mysqli_query($conn,"CREATE DATABASE dbUser");
if(!$result){
    die("ne peut pas cree la base de donnre".mysqli_error($conn));
}
else{
    echo "Create successfuly";
}*/

/*$sql= "CREATE TABLE dbUser.users(id INT(6) UNSIGNED  AUTO_INCREMENT PRIMARY KEY , 
username VARCHAR(60) NOT NULL 
, email VARCHAR(50) UNIQUE ,
password  VARCHAR(60), 
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
ON UPDATE CURRENT_TIMESTAMP
)";
$result=mysqli_query($conn,$sql);
if($result){
    echo "create table";
}else{
    die("table failed".mysqli_error($conn));
}*/

/*$sql= "DROP TABLE dbUser.users";
$result=mysqli_query($conn,$sql);
if($result){
    echo "delet sucss..";
}
else{
    die("faield".mysqli_error($conn));
}*/





?>