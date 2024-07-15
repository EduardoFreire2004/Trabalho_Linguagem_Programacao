<?php
namespace MODEL;

class Atividade
{
    private ?int $id;
    private ?string $nome;
    private ?string $descricao;
    private ?int $professor;
    private ?int $departamento;
    private ?int $qtdeAlunos;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function getProfessor()
    {
        return $this->professor;
    }

    public function setProfessor(int $professor)
    {
        $this->professor = $professor;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function setDepartamento(int $departamento)
    {
        $this->departamento = $departamento;
    }

    public function getQtdeAlunos()
    {
        return $this->qtdeAlunos;
    }

    public function setQtdeAlunos(int $qtdeAlunos)
    {
        $this->qtdeAlunos = $qtdeAlunos;
    }

}

?>