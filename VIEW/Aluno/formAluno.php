<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Inserir Alunos</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>
    
    <?php include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Aluno.php' ?>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container grey lighten-3 white-text col s12">
        <div class="center blue darken-3">
            <h1>Inserir Aluno</h1>
        </div>
        <div class="row  black-text">
            <form action="insAluno.php" method="POST" class="col s12">
                
                <div class="input-field col s8">
                    <input placeholder="Informe o Nome" id="nome" name="txtNome" type="text"
                        class="validate">
                    <label for="nome">Nome</label>
                </div>


                <div class="input-field col s5">
                    <input placeholder="Informe a Data de Nascimento" id="nascimento" name="txtNascimento" type="date"
                        class="validate">
                    <label for="nascimento">Nascimento</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o Endereço" id="endereco" name="txtEndereco" type="text"
                        class="validate">
                    <label for="endereco">Endereço</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o Email" id="email" name="txtEmail" type="text"
                        class="validate">
                    <label for="email">Email</label>
                </div>
                
                <div class="input-field col s8">
                    <input placeholder="Informe o CPF" id="cpf" name="txtCpf" type="text"
                        class="validate">
                    <label for="cpf">CPF</label>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstAluno.php'">
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