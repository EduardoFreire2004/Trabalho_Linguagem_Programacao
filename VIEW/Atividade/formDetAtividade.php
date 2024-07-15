<?php 
  include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Atividade.php';
  include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Atividade.php'; 
  include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Professor.php';
  include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Departamento.php';
 
  $id = $_GET['id']; 

  $bllatividade = new BLL\Atividade();
  $atividade = $bllatividade->SelectByID($id);

    $professorId = $atividade->getProfessor();
    $departamentoId = $atividade->getDepartamento();

    $bllprofessor = new BLL\Professor();
    $professor = $bllprofessor->SelectByID($professorId);

    $blldepartamento = new BLL\Departamento();
    $departamento = $blldepartamento->SelectByID($departamentoId);

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Detalhes de Atividades</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container grey lighten-3 white-text col s12">
        <div class="center blue darken-3">
            <h1>Detalhes Atividade</h1>
        </div>

        <div class="input-field col s8 black-text">
            <h5> ID: <?php echo $id; ?> </h5>
            <input type="hidden" name="txtId" value=<?php echo $id; ?>>
            <h5> Nome: <?php echo $atividade->getNome(); ?> </h5>
            <h5>Descrição: <?php echo $atividade->getDescricao(); ?> </h5>
            <h5>Professor: <?php echo $professor->getNome(); ?> </h5>
            <h5>Departamento: <?php echo $departamento->getNome(); ?> </h5>
            <h5>Quantidade de Alunos: <?php echo $atividade->getQtdeAlunos(); ?> </h5>

        </div>

        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" 
            onclick="JavaScript:location.href='formEdtAtividade.php?id=' +
                                         '<?php echo $atividade->getId();?>'" >
            <i class="material-icons">edit</i>
            </button>

            <button class="waves-effect waves-light btn red" type="button" 
            onclick="JavaScript: remover( <?php echo $atividade->getId(); ?> )">
            <i class="material-icons">delete</i>
            </button>


            <button class="waves-effect waves-light btn blue" type="button"
                onclick="JavaScript:location.href='lstAtividade.php'"><i class="material-icons">arrow_back</i>
            </button>
            <br>
            <br>
        </div>

    </div>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Atividade ' + id + '?')) {
            location.href = 'remAtividade.php?id=' + id;
        }
    }
</script>