<?php 
    namespace VIEW\Atividade;
    include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Atividade.php'; 

    $id = $_GET['id']; 

    $bllatividade = new \BLL\Atividade(); 
    $result =  $bllatividade->Delete($id);  
    
    header("location: lstAtividade.php");
?>