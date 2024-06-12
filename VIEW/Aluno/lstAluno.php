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
    <h1>Listar Alunos</h1>
    <table class="highlight"> 
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>NASCIMENTO</th>
            <th>ENDEREÇO</th>
            <th>CPF</th>
            <th>EMAIL</th>

        </tr>
        
        <?php foreach($lstAluno as $aluno) { ?>
            <tr>
                <td><?php echo $aluno->getId(); ?></td>
                <td><?php echo $aluno->getNome();?> </td>
                <td><?php echo $aluno->getNascimento();?> </td>
                <td><?php echo $aluno->getEndereco();?> </td>
                <td><?php echo $aluno->getCpf();?> </td>
                <td><?php echo $aluno->getEmail();?> </td>
            </tr>
       <?php } ?>

    </table>
</body>
</html>