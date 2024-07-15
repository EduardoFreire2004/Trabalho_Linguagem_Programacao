<?php
   include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Aluno.php';
   use BLL\Aluno;
   
   $bllAluno = new \BLL\Aluno();
   $lstAluno = $bllAluno->Select(); 

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
    <title>Listar Alunos </title>
</head>
<body>
    <?php include_once '../menu.php';?>

    <h1>Listar Alunos</h1>
    <table class="highlight"> 
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>NASCIMENTO</th>
            <th>ENDEREÇO</th>
            <th>CPF</th>
            <th>EMAIL</th>
            <th>ADICIONAR ALUNOS :  
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formAluno.php'">add</i></a>

            </th>

        </tr>
        
        <?php foreach($lstAluno as $aluno) { ?>
            <tr>
                <td><?php echo $aluno->getId(); ?></td>
                <td><?php echo $aluno->getNome();?> </td>
                <td><?php echo $aluno->getNascimento();?> </td>
                <td><?php echo $aluno->getEndereco();?> </td>
                <td><?php echo $aluno->getCpf();?> </td>
                <td><?php echo $aluno->getEmail();?> </td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='formEdtAluno.php?id=' + '<?php echo $aluno->getId(); ?>'">
                        <i class="material-icons">edit</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light blue"
                        onclick="JavaScript:location.href='formDetAluno.php?id=' + '<?php echo $aluno->getId(); ?>'"><i
                            class="material-icons">details</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript: remover( <?php echo $aluno->getId(); ?> )">
                        <i class="material-icons">delete</i></a>

                </td>
            </tr>
       <?php } ?>

    </table>
</body>
</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Aluno ' + id + '?')) {
            location.href = 'remAluno.php?id=' + id;
        }
    }
</script>