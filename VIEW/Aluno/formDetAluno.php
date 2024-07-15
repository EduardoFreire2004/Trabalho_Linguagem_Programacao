<?php
include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Aluno.php';
include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Aluno.php';
$id = $_GET['id'];

$bllAluno = new BLL\Aluno();
$aluno = $bllAluno->SelectByID($id);

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
   
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Detalhes de Alunos</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container grey lighten-3 white-text col s12">
        <div class="center blue darken-3">
            <h1>Detalhes Aluno</h1>
        </div>

        <div class="input-field col s8 black-text">
            <h5> ID: <?php echo $id; ?> </h5>
            <input type="hidden" name="txtId" value=<?php echo $id; ?>>
            <h5> Nome: <?php echo $aluno->getNome(); ?> </h5>
                <h5>Data de Nascimento: <?php echo $aluno->getNascimento(); ?> </h5>
                <h5>Endereço: <?php echo $aluno->getEndereco(); ?> </h5>
                <h5>Email: <?php echo $aluno->getEmail(); ?> </h5>
                <h5>CPF: <?php echo $aluno->getCpf(); ?> </h5>

        </div>

        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" 
            onclick="JavaScript:location.href='formEdtAluno.php?id=' +
                                         '<?php echo $aluno->getId();?>'" >
            <i class="material-icons">edit</i>
            </button>

            <button class="waves-effect waves-light btn red" type="button" 
            onclick="JavaScript: remover( <?php echo $aluno->getId(); ?> )">
            <i class="material-icons">delete</i>
            </button>


            <button class="waves-effect waves-light btn blue" type="button"
                onclick="JavaScript:location.href='lstAluno.php'"><i class="material-icons">arrow_back</i>
            </button>
            <br>
            <br>
        </div>

    </div>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Aluno ' + id + '?')) {
            location.href = 'remAluno.php?id=' + id;
        }
    }
</script>