<?php 
    namespace VIEW\Professor;
    include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Professor.php'; 
    include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Professor.php'; 

    $professor = new \MODEL\Professor();
    
    $professor->setNome($_POST['txtNome']);
    $professor->setEmail($_POST['txtEmail']);

    $bllprofessor = new \BLL\Professor(); 
    $result =  $bllprofessor->Insert($professor);  

    if ($result->errorCode() == '00000') {
        header("location: lstProfessor.php");
      }
      else echo $result->errorInfo();
  

?>