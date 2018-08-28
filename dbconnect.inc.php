<?php
try{
$pdo = new PDO('mysql:host=localhost;dbname=registration', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
}
catch(PDOException $e){
    $error = 'Unable to connect to the database'. $e->getMessage();
    include 'error.html.php';
        exit();

}
//$output ='Database connection established successfully';
//include 'output.html.php';
         
//        return $this->conn;
    

?>