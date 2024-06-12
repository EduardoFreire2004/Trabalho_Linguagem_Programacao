<?php
   include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Matricula.php';
   use BLL\Matricula;
   
   $bllMatricula = new \BLL\Matricula();
   $lstMatricula = $bllMatricula->Select(); 

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
    <title>Listar Matrículas </title>
</head>
<body>
    <h1>Listar Matrículas</h1>
    <table class="highlight"> 
        <tr>
            <th>ID</th>
            <th>ALUNO</th>
            <th>ATIVIDADE</th>
            <th>DATA MATRÍCULA</th>

        </tr>
        
        <?php foreach($lstMatricula as $matricula) { ?>
            <tr>
                <td><?php echo $matricula->getId(); ?></td>
                <td><?php echo $matricula->getAluno();?> </td>
                <td><?php echo $matricula->getAtividade();?> </td>
                <td><?php echo $matricula->getDatamatricula();?> </td>
            </tr>
       <?php } ?>

    </table>
</body>
</html>