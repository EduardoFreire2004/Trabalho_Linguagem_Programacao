<?php 
    namespace VIEW\Aluno;
    include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Aluno.php'; 
    include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Aluno.php'; 

    $aluno = new \MODEL\Aluno();

    $aluno->setNome($_POST['txtNome']);
    $aluno->setNascimento($_POST['txtNascimento']);
    $aluno->setEndereco($_POST['txtEndereco']);
    $aluno->setEmail($_POST['txtEmail']);
    $aluno->setCpf($_POST['txtCpf']);

    $bllAluno = new \BLL\Aluno(); 
    $result =  $bllAluno->Insert($aluno);  

    if ($result->errorCode() == '00000') {
        header("location: lstAluno.php");
      }
      else echo $result->errorInfo();
  

?>