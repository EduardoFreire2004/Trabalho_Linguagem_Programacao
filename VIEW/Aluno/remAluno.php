<?php 
    namespace VIEW\Aluno;
    include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Aluno.php'; 

    $id = $_GET['id']; 

    $bllAluno = new \BLL\Aluno(); 
    $result =  $bllAluno->Delete($id);  
    
    header("location: lstAluno.php");
?>