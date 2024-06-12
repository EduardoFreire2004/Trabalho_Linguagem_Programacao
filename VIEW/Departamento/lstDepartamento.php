<?php
   include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Departamento.php';
   use BLL\Departamento;
   
   $bllDepartamento = new \BLL\Departamento();
   $lstDepartamento = $bllDepartamento->Select(); 

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
    <title>Listar Departamentos </title>
</head>
<body>
    <h1>Listar Departamentos</h1>
    <table class="highlight"> 
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>

        </tr>
        
        <?php foreach($lstDepartamento as $departamento) { ?>
            <tr>
                <td><?php echo $departamento->getId(); ?></td>
                <td><?php echo $departamento->getNome();?> </td>
                <td><?php echo $departamento->getDescricao();?> </td>
            </tr>
       <?php } ?>

    </table>
</body>
</html>