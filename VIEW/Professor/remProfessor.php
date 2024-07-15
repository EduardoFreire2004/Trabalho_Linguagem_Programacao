<?php 
    namespace VIEW\Professor;
    include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Professor.php'; 

    $id = $_GET['id']; 

    $bllprofessor = new \BLL\Professor(); 
    $result =  $bllprofessor->Delete($id);  
    
    header("location: lstProfessor.php");
?>