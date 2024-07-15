<?php
   include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Departamento.php';
   use BLL\Departamento;
   
   $bllDpto = new \BLL\Departamento();
   $lstDpto = $bllDpto->Select(); 

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
    <?php include_once '../menu.php';?>

    <h1>Listar Departamentos</h1>
    <table class="highlight"> 
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>ADICIONAR DEPARTAMENTOS :  
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formDepartamento.php'">add</i></a>

            </th>

        </tr>
        
        <?php foreach($lstDpto as $Dpto) { ?>
            <tr>
                <td><?php echo $Dpto->getId(); ?></td>
                <td><?php echo $Dpto->getNome();?> </td>
                <td><?php echo $Dpto->getDescricao();?> </td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='formEdtDepartamento.php?id=' + '<?php echo $Dpto->getid(); ?>'">
                        <i class="material-icons">edit</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light blue"
                        onclick="JavaScript:location.href='formDetDepartamento.php?id=' + '<?php echo $Dpto->getid(); ?>'"><i
                            class="material-icons">details</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript: remover( <?php echo $Dpto->getId(); ?> )">
                        <i class="material-icons">delete</i></a>

                </td>
            </tr>
       <?php } ?>

    </table>

</body>
</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Departamento ' + id + '?')) {
            location.href = 'remDepartamento.php?id=' + id;
        }
    }
</script>