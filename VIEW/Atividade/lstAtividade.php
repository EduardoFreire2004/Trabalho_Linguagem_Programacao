<?php
   include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Atividade.php';
   use BLL\Atividade;
   
   $bllAtividade = new \BLL\Atividade();
   $lstAtividade = $bllAtividade->Select(); 

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
    <title>Listar Atividades </title>
</head>
<body>
    <h1>Listar Atividades</h1>
    <table class="highlight"> 
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>PROFESSOR</th>
            <th>DEPARTAMENTO</th>

        </tr>
        
        <?php foreach($lstAtividade as $atividade) { ?>
            <tr>
                <td><?php echo $atividade->getId(); ?></td>
                <td><?php echo $atividade->getNome();?> </td>
                <td><?php echo $atividade->getDescricao();?> </td>
                <td><?php echo $atividade->getProfessor();?> </td>
                <td><?php echo $atividade->getDepartamento();?> </td>
            </tr>
       <?php } ?>

    </table>
</body>
</html>