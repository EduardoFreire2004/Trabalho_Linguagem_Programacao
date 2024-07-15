<?php 
  include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Matricula.php';
  include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Matricula.php'; 
  include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Aluno.php';
  include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Atividade.php';
 
  $id = $_GET['id']; 

  $bllmatricula = new BLL\Matricula();
  $matricula = $bllmatricula->SelectByID($id);

    $alunoId = $matricula->getAluno();
    $atividadeId = $matricula->getAtividade();

    $bllaluno = new BLL\Aluno();
    $aluno = $bllaluno->SelectByID($alunoId);

    $bllatividade = new BLL\Atividade();
    $atividade = $bllatividade->SelectByID($atividadeId);

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Detalhes de Matrícula</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container grey lighten-3 white-text col s12">
        <div class="center blue darken-3">
            <h1>Detalhes Matrícula</h1>
        </div>

        <div class="input-field col s8 black-text">
            <h5> ID: <?php echo $id; ?> </h5>
            <input type="hidden" name="txtId" value=<?php echo $id; ?>>
            <h5> Data: <?php echo $matricula->getDatamatricula(); ?> </h5>
            <h5> Aluno: <?php echo $aluno->getNome(); ?> </h5>
            <h5> Atividade: <?php echo $atividade->getNome(); ?> </h5>

        </div>

        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" 
            onclick="JavaScript:location.href='formEdtMatricula.php?id=' +
                                         '<?php echo $matricula->getId();?>'" >
            <i class="material-icons">edit</i>
            </button>

            <button class="waves-effect waves-light btn red" type="button" 
            onclick="JavaScript: remover( <?php echo $matricula->getId(); ?> )">
            <i class="material-icons">delete</i>
            </button>


            <button class="waves-effect waves-light btn blue" type="button"
                onclick="JavaScript:location.href='lstMatricula.php'"><i class="material-icons">arrow_back</i>
            </button>
            <br>
            <br>
        </div>

    </div>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Matricula ' + id + '?')) {
            location.href = 'remMatricula.php?id=' + id;
        }
    }
</script>