<?php 
    namespace VIEW\Matricula;
    include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Matricula.php'; 

    $id = $_GET['id']; 

    $bllmatricula = new \BLL\Matricula(); 
    $result =  $bllmatricula->Delete($id);  
    
    header("location: lstMatricula.php");
?>