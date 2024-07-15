<?php 
  include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Aluno.php';
  include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Aluno.php'; 
  $id = $_GET['id']; 
  
  $bllaluno = new BLL\Aluno();
  $aluno = $bllaluno->SelectByID($id);

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Editar Alunos</title>
   
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container grey lighten-3 white-text col s12">
        <div class="center blue darken-3">
            <h1>Editar Aluno</h1>
        </div>
        <div class="row  black-text">
            <form action="edtAluno.php" method="POST" class="col s12">
                 <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $aluno->getId() ?></label>
                    </br> </br>
                    <input type="hidden" name="txtId" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o Nome" id="nome" name="txtNome" type="text" class="validate" 
                    value="<?php echo $aluno->getNome();?>">
                    <label  for="nome">Nome</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="Informe Data de Nascimento" id="nascimento" name="txtNascimento" type="date" class="validate" value="<?php echo $aluno->getNascimento();?>">
                    <label for="nascimento">Nascimento</label>
                </div>
                <div class="input-field col s5">
                    <input placeholder="Informe o Endereço" id="endereco" name="txtEndereco" type="text" class="validate" value="<?php echo $aluno->getEndereco();?>">
                    <label for="endereco">Endereço</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="Informe o Email" id="email" name="txtEmail" type="text" class="validate" value="<?php echo $aluno->getEmail();?>">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="Informe o CPF" id="cpf" name="txtCpf" type="text" class="validate" value="<?php echo $aluno->getCpf();?>">
                    <label for="cpf">CPF</label>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                   
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstAluno.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
</body>

</html
