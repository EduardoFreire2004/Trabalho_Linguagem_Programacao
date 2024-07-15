<?php
   include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Professor.php';
   use BLL\Professor;
   
   $bllProfessor = new \BLL\Professor();
   $lstProfessor = $bllProfessor->Select(); 

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
    <title>Listar Professores </title>
</head>
<body>
    <?php include_once '../menu.php';?>

    <h1>Listar Professores</h1>
    <table class="highlight"> 
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>ADICIONAR PROFESSORES :  
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formProfessor.php'">add</i></a>

            </th>
        </tr>
        
        <?php foreach($lstProfessor as $professor) { ?>
            <tr>
                <td><?php echo $professor->getId(); ?></td>
                <td><?php echo $professor->getNome();?> </td>
                <td><?php echo $professor->getEmail();?> </td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='formEdtProfessor.php?id=' + '<?php echo $professor->getid(); ?>'">
                        <i class="material-icons">edit</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light blue"
                        onclick="JavaScript:location.href='formDetProfessor.php?id=' + '<?php echo $professor->getid(); ?>'"><i
                            class="material-icons">details</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript: remover( <?php echo $professor->getId(); ?> )">
                        <i class="material-icons">delete</i></a>

                </td>
            </tr>
       <?php } ?>

    </table>
</body>
</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Professor ' + id + '?')) {
            location.href = 'remProfessor.php?id=' + id;
        }
    }
</script>