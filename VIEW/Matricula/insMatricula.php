<?php 
    namespace VIEW\Matricula;
    include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Matricula.php'; 
    include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Matricula.php'; 

    $matricula = new \MODEL\Matricula();
    
    $matricula->setDatamatricula($_POST['txtData']);
    $matricula->setAluno($_POST['slcAluno']);
    $matricula->setAtividade($_POST['slcAtividade']);

    $bllmatricula = new \BLL\Matricula(); 
    $result =  $bllmatricula->Insert($matricula);  

    if ($result->errorCode() == '00000') {
        header("location: lstMatricula.php");
      }
      else echo $result->errorInfo();
  

?>