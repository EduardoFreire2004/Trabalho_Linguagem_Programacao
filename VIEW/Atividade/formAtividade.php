<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Inserir Atividades</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>
    
    <?php 
        include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Atividade.php';
        include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Professor.php';
        include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Departamento.php';
     ?>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container grey lighten-3 white-text col s12">
        <div class="center blue darken-3">
            <h1>Inserir Atividade</h1>
        </div>
        <div class="row  black-text">
            <form action="insAtividade.php" method="POST" class="col s12">
    
                <div class="input-field col s8">
                    <input placeholder="Informe o Nome" id="nome" name="txtNome" type="text"
                        class="validate">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe a Descricao" id="descricao" name="txtDescricao" type="text"
                        class="validate">
                    <label for="descricricao">Descrição</label>
                </div>
                
                 <div class="input-field col s5">

                    <select name="slcProf">
                        <option value="" disabled selected>Escolha um Professor</option>
                        <?php
                        $bllprofessor = new BLL\Professor();
                        $lstprofessor = $bllprofessor->Select(); 

                        foreach ($lstprofessor as $professor) { ?>
                            <option value="<?php echo $professor->getId(); ?>">
                                <?php echo $professor->getNome(); ?>
                            </option>
                        <?php } ?>
                    </select>
                    <label>Informe o Professor</label>
                </div>

                <div class="input-field col s5">
                
                    <select name="slcDpto">
                        <option value="" disabled selected>Escolha um Departamento</option>
                        <?php
                        $bllDpto = new BLL\Departamento();
                        $lstDpto = $bllDpto->Select(); 

                        foreach ($lstDpto as $dpto) { ?>
                            <option value="<?php echo $dpto->getId(); ?>">
                                <?php echo $dpto->getNome(); ?>
                            </option>
                         <?php } ?>
                    </select>
                    <label>Informe o Departamento</label>
                </div>


                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstAtividade.php'">
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