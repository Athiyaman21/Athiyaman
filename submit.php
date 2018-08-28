<?php
try{
    include 'magicquotes.inc.php';
include 'dbconnect.inc.php';
}
  catch (PDOException $e)
{
$error = 'Error adding submitted supplier: ' . $e->getMessage();
include 'error.html.php';
exit();
}

//$output ='Database connection established successfully';
//include 'output.html.php';


  
   try{
       $sql = 'INSERT INTO stdtable SET
       std_id = :stdid,
       std_name = :stdname,
       std_age = :stdage,
       std_gender = :stdgender,
       std_num = :stdregnumber,
       std_street = :stdstreet,
       std_city = :stdcity,
       std_country = :stdcountry,
       std_poastal = :stdpoastal,
       std_dept = :stddept,
       std_semester = :stdsem,
       std_major = :stdmajor';
       $s = $pdo->prepare($sql);
       $s->bindValue(':stdid', $_POST['std-id']);
       $s->bindValue(':stdname', $_POST['std-name']);
       $s->bindValue(':stdage', $_POST['std-age']);
       $s->bindValue(':stdgender', $_POST['std-gender']);
       $s->bindValue(':stdregnumber', $_POST['std-number']);
       $s->bindValue(':stdstreet', $_POST['std-street']);
       $s->bindValue(':stdcity', $_POST['std-city']);
       $s->bindValue(':stdcountry', $_POST['std-country']);
       $s->bindValue(':stdpoastal', $_POST['std-poastal']);
       $s->bindValue(':stddept', $_POST['std-department']);
       $s->bindValue(':stdsem', $_POST['std-semester']);
       $s->bindValue(':stdmajor', $_POST['std-major']);
       $s->execute();
   
   } 
    
   catch (PDOException $e)
{
$error = 'Error adding submitted student data: ' . $e->getMessage();
include 'error.html.php';
exit();
}

$output ='student data inserted successfully';
//echo "Data Inserted Successfully";
header('Location: action.php');

exit;

?>