<?php
   include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Professor.php';
   use BLL\Professor;
   
   $bllProfessor = new \BLL\Professor();
   $lstProfessor = $bllProfessor->Select(); 

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Professores </title>
</head>
<body>
    <h1>Listar Professores</h1>
    <table class="highlight"> 
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>

        </tr>
        
        <?php foreach($lstProfessor as $professor) { ?>
            <tr>
                <td><?php echo $professor->getId(); ?></td>
                <td><?php echo $professor->getNome();?> </td>
                <td><?php echo $professor->getEmail();?> </td>
            </tr>
       <?php } ?>

    </table>
</body>
</html>