<?php 
  namespace VIEW\Departamento;
  include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Departamento.php'; 
  include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Departamento.php'; 

  $Dpto = new \MODEL\Departamento();

    $Dpto->setId($_POST['txtId']);
    $Dpto->setNome($_POST['txtNome']);
    $Dpto->setDescricao($_POST['txtDescricao']);

  $bllDpto = new \BLL\Departamento(); 
  $result =  $bllDpto->Update($Dpto);  


  header("location: lstDepartamento.php");

?>