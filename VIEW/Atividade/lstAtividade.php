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
    <?php include_once '../menu.php';?>

    <h1>Listar Atividades</h1>
    <table class="highlight"> 
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>PROFESSOR</th>
            <th>DEPARTAMENTO</th>
            <th>QUANTIDADE DE ALUNOS</th>
            <th>ADICIONAR ATIVIDADE :
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formAtividade.php'">add</i></a>
            </th>

        </tr>
        
        <?php foreach($lstAtividade as $atividade) { ?>
            <tr>
                <td><?php echo $atividade->getId(); ?></td>
                <td><?php echo $atividade->getNome();?> </td>
                <td><?php echo $atividade->getDescricao();?> </td>
                <td><?php echo $atividade->getProfessor();?> </td>
                <td><?php echo $atividade->getDepartamento();?> </td>
                <td><?php echo $atividade->getQtdeAlunos();?> </td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='formEdtAtividade.php?id=' + '<?php echo $atividade->getId(); ?>'">
                        <i class="material-icons">edit</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light blue"
                        onclick="JavaScript:location.href='formDetAtividade.php?id=' + '<?php echo $atividade->getId(); ?>'"><i
                            class="material-icons">details</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript: remover( <?php echo $atividade->getId(); ?> )">
                        <i class="material-icons">delete</i></a>

                </td>
            </tr>
       <?php } ?>

    </table>
</body>
</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Atividade ' + id + '?')) {
            location.href = 'remAtividade.php?id=' + id;
        }
    }
</script>