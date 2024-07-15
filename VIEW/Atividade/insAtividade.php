<?php 
    namespace VIEW\Atividade;
    include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Atividade.php'; 
    include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Atividade.php'; 

    $atividade = new \MODEL\Atividade();

    $atividade->setNome($_POST['txtNome']);
    $atividade->setDescricao($_POST['txtDescricao']);
    $atividade->setProfessor($_POST['slcProf']);
    $atividade->setDepartamento($_POST['slcDpto']);

    $bllatividade = new \BLL\Atividade(); 
    $result =  $bllatividade->Insert($atividade);  

    if ($result->errorCode() == '00000') {
        header("location: lstAtividade.php");
      }
      else echo $result->errorInfo();
?>