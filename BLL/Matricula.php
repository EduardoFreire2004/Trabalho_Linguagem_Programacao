<?php
namespace BLL;
include_once  'C:\xampp\htdocs\projeto-escolar-php\DAL\Matricula.php';
include_once 'C:\xampp\htdocs\projeto-escolar-php\BLL\Atividade.php';
use DAL;

class Matricula
{
    public function Select(){   
        $dalMatricula = new \DAL\Matricula();   
        return $dalMatricula->Select();
    }

    public function SelectByID(int $id)
    {   
        $dalMatricula = new \DAL\Matricula();   
        return $dalMatricula->SelectByID($id);
    }

    public function Insert(\MODEL\Matricula $matricula){
        $dalMatricula = new \DAL\Matricula();   

        $bllAtividade = new \BLL\Atividade();
        $atividade = $bllAtividade->SelectByID($matricula->getAtividade());
        $qtdeAlunos = $atividade->getQtdeAlunos();
        $qtdeAlunos++;
        $atividade->setQtdeAlunos($qtdeAlunos);

        $bllAtividade->Update($atividade);
        
        return $dalMatricula->Insert($matricula);
    }


    public function Update(\MODEL\Matricula $matricula){
        $dalMatricula = new \DAL\Matricula();   
 
        return $dalMatricula->Update($matricula);
    }

   public function Delete(int $id){   
        $dalMatricula = new \DAL\Matricula();
        $matricula = $this->SelectByID($id);

        $bllAtividade = new \BLL\Atividade();
        $atividade = $bllAtividade->SelectByID($matricula->getAtividade());
        $qtdeAlunos = $atividade->getQtdeAlunos();
        $qtdeAlunos--;
        $atividade->setQtdeAlunos($qtdeAlunos);

        $bllAtividade->Update($atividade);


        return $dalMatricula->Delete($id);


    }



}
?>