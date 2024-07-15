<?php 
    namespace VIEW\Departamento;
    include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Departamento.php'; 
    include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Departamento.php'; 

    $Dpto = new \MODEL\Departamento();
    
    $Dpto->setNome($_POST['txtNome']);
    $Dpto->setDescricao($_POST['txtDescricao']);

    $bllDpto = new \BLL\Departamento(); 
    $result =  $bllDpto->Insert($Dpto);  

    if ($result->errorCode() == '00000') {
        header("location: lstDepartamento.php");
      }
      else echo $result->errorInfo();
  

?>