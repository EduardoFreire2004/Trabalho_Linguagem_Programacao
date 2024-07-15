<?php 
  namespace VIEW\Matricula;
  include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Matricula.php'; 
  include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Matricula.php'; 

  $matricula = new \MODEL\Matricula();

    $matricula->setId($_POST['txtId']);
    $matricula->setDatamatricula($_POST['txtData']);
    $matricula->setAluno($_POST['slcAluno']);
    $matricula->setAtividade($_POST['slcAtividade']);

  $bllmatricula = new \BLL\Matricula(); 
  $result =  $bllmatricula->Update($matricula);  


  header("location: lstMatricula.php");

?>