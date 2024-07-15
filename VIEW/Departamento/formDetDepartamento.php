<?php
include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Departamento.php';
include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Departamento.php';
$id = $_GET['id'];

$bllDpto = new BLL\Departamento();
$Dpto = $bllDpto->SelectByID($id);

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Detalhes de Departamentos</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container grey lighten-3 white-text col s12">
        <div class="center blue darken-3">
            <h1>Detalhes Departamento</h1>
        </div>

        <div class="input-field col s8 black-text">
            <h5> ID: <?php echo $id; ?> </h5>
            <input type="hidden" name="txtId" value=<?php echo $id; ?>>
            <h5> Nome: <?php echo $Dpto->getNome(); ?> </h5>
                <h5>Descrição: <?php echo $Dpto->getDescricao(); ?> </h5>
        </div>

        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" 
            onclick="JavaScript:location.href='formEdtDepartamento.php?id=' +
                                         '<?php echo $Dpto->getId();?>'" >
            <i class="material-icons">edit</i>
            </button>

            <button class="waves-effect waves-light btn red" type="button" 
            onclick="JavaScript: remover( <?php echo $Dpto->getId(); ?> )">
            <i class="material-icons">delete</i>
            </button>


            <button class="waves-effect waves-light btn blue" type="button"
                onclick="JavaScript:location.href='lstDepartamento.php'"><i class="material-icons">arrow_back</i>
            </button>
            <br>
            <br>
        </div>

    </div>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Departamento ' + id + '?')) {
            location.href = 'remDepartamento.php?id=' + id;
        }
    }
</script>