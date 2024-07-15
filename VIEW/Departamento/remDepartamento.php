<?php 
    namespace VIEW\Departamento;
    include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Departamento.php'; 

    $id = $_GET['id']; 

    $bllDpto = new \BLL\Departamento(); 
    $result =  $bllDpto->Delete($id);  
    
    header("location: lstDepartamento.php");
?>