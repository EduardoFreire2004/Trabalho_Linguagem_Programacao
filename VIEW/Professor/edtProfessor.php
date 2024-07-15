<?php 
  namespace VIEW\Professor;
  include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Professor.php'; 
  include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Professor.php'; 

  $professor = new \MODEL\Professor();

    $professor->setId($_POST['txtId']);
    $professor->setNome($_POST['txtNome']);
    $professor->setEmail($_POST['txtEmail']);

  $bllprofessor = new \BLL\Professor(); 
  $result =  $bllprofessor->Update($professor);  


  header("location: lstProfessor.php");

?>