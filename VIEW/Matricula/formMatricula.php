<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Inserir Matrículas</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>
    
    <?php 
        include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Matricula.php';
        include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Aluno.php';
        include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Atividade.php';
     ?>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container grey lighten-3 white-text col s12">
        <div class="center blue darken-3">
            <h1>Inserir Matrícula</h1>
        </div>
        <div class="row  black-text">
            <form action="insMatricula.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <input placeholder="Informe a Data" id="data" name="txtData" type="date"
                        class="validate">
                    <label for="data">Data</label>
                </div>

                <div class="input-field col s5">

                    <select name="slcAluno">
                        <option value="" disabled selected>Escolha um Aluno</option>
                        <?php
                        $bllaluno = new BLL\Aluno();
                        $lstaluno = $bllaluno->Select(); 

                        foreach ($lstaluno as $aluno) { ?>
                            <option value="<?php echo $aluno->getId(); ?>">
                                <?php echo $aluno->getNome(); ?>
                            </option>
                        <?php } ?>
                    </select>
                    <label>Informe o Aluno</label>
                </div>

                <div class="input-field col s5">
                
                    <select name="slcAtividade">
                        <option value="" disabled selected>Escolha uma Atividade</option>
                        <?php
                        $bllatividade = new BLL\Atividade();
                        $lstatividade = $bllatividade->Select(); 

                        foreach ($lstatividade as $atividade) { ?>
                            <option value="<?php echo $atividade->getId(); ?>">
                                <?php echo $atividade->getNome(); ?>
                            </option>
                         <?php } ?>
                    </select>
                    <label>Informe a Atividade</label>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstMatricula.php'">
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