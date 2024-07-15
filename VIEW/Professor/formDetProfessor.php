<?php
include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Professor.php';
include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Professor.php';
$id = $_GET['id'];

$bllprofessor = new BLL\Professor();
$professor = $bllprofessor->SelectByID($id);

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Detalhes de Professores</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container grey lighten-3 white-text col s12">
        <div class="center blue darken-3">
            <h1>Detalhes Professor</h1>
        </div>

        <div class="input-field col s8 black-text">
            <h5> ID: <?php echo $id; ?> </h5>
            <input type="hidden" name="txtId" value=<?php echo $id; ?>>
            <h5> Nome: <?php echo $professor->getNome(); ?> </h5>
                <h5>Email: <?php echo $professor->getEmail(); ?> </h5>
        </div>

        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" 
            onclick="JavaScript:location.href='formEdtProfessor.php?id=' +
                                         '<?php echo $professor->getId();?>'" >
            <i class="material-icons">edit</i>
            </button>

            <button class="waves-effect waves-light btn red" type="button" 
            onclick="JavaScript: remover( <?php echo $professor->getId(); ?> )">
            <i class="material-icons">delete</i>
            </button>


            <button class="waves-effect waves-light btn blue" type="button"
                onclick="JavaScript:location.href='lstProfessor.php'"><i class="material-icons">arrow_back</i>
            </button>
            <br>
            <br>
        </div>

    </div>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Professor ' + id + '?')) {
            location.href = 'remProfessor.php?id=' + id;
        }
    }
</script>