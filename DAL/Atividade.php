<?php

namespace DAL;

include_once 'Conexao.php';
include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Atividade.php';

class Atividade
{
    public function Select()
    {
        $sql = "SELECT * FROM atividade;";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($dados as $linha) {
            $atividade = new \MODEL\Atividade();

            $atividade->setId($linha['id']);
            $atividade->setNome($linha['nome']);
            $atividade->setDescricao($linha['descricao']);
            $atividade->setProfessor($linha['professor']);
            $atividade->setDepartamento($linha['departamento']);
            $atividade->setQtdeAlunos($linha['qtdeAlunos']);

            $lstAtividade[] = $atividade;
        }

        return $lstAtividade;
    }

    
    public function SelectByID(int $id)
    {
        $sql = "Select * from atividade where id=?;";
        $con = Conexao::conectar(); 
        $query = $con->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 

        $atividade = new \MODEL\Atividade();
        $atividade->setId($linha['id']);
        $atividade->setNome($linha['nome']);
        $atividade->setDescricao($linha['descricao']);
        $atividade->setProfessor($linha['professor']);
        $atividade->setDepartamento($linha['departamento']);
        $atividade->setQtdeAlunos($linha['qtdeAlunos']);

   
        return $atividade;

    }


    public function Insert(\MODEL\Atividade $atividade)
    {
        $sql = "INSERT INTO atividade (nome, descricao, professor, departamento) VALUES ('{$atividade->getNome()}','{$atividade->getDescricao()}','{$atividade->getProfessor()}','{$atividade->getDepartamento()}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        return $result;
    }

    public function Update(\MODEL\Atividade $atividade)
    {
        $sql = "UPDATE atividade SET nome = ?, descricao = ?, professor = ?, departamento = ?, qtdeAlunos = ? WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);

        $result = $query->execute(array($atividade->getNome(), $atividade->getDescricao(), $atividade->getProfessor(), $atividade->getDepartamento(), $atividade->getQtdeAlunos(), $atividade->getId()));

        $con = Conexao::desconectar();

        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM atividade WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();

        return $result;
    }
}

?>
