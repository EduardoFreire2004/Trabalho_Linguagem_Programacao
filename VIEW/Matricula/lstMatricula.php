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
    <?php include_once '../menu.php';?>

    <h1>Listar Matrículas</h1>
    <table class="highlight"> 
        <tr>
            <th>ID</th>
            <th>ALUNO</th>
            <th>ATIVIDADE</th>
            <th>DATA MATRÍCULA</th>
            <th>ADICIONAR MATRÍCULAS :  
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formMatricula.php'">add</i></a>

            </th>
        </tr>
        
        <?php foreach($lstMatricula as $matricula) { ?>
            <tr>
                <td><?php echo $matricula->getId(); ?></td>
                <td><?php echo $matricula->getAluno();?> </td>
                <td><?php echo $matricula->getAtividade();?> </td>
                <td><?php echo $matricula->getDatamatricula();?> </td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='formEdtMatricula.php?id=' + '<?php echo $matricula->getid(); ?>'">
                        <i class="material-icons">edit</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light blue"
                        onclick="JavaScript:location.href='formDetMatricula.php?id=' + '<?php echo $matricula->getid(); ?>'"><i
                            class="material-icons">details</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript: remover( <?php echo $matricula->getId(); ?> )">
                        <i class="material-icons">delete</i></a>

                </td>
            </tr>
       <?php } ?>

    </table>
</body>
</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Matricula ' + id + '?')) {
            location.href = 'remMatricula.php?id=' + id;
        }
    }
</script>