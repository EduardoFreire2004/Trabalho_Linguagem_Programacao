<?php
namespace BLL;
include_once 'C:\xampp\htdocs\projeto-escolar-php\DAL\Atividade.php';
use DAL;

class Atividade
{
    public function Select(){   
        $dalAtividade = new \DAL\Atividade();   
        return $dalAtividade->Select();
    }

    public function SelectByID(int $id)
    {   
        $dalAtividade = new \DAL\Atividade();   
        return $dalAtividade->SelectByID($id);
    }

    public function Insert(\MODEL\Atividade $atividade){
        $dalAtividade = new \DAL\Atividade();   
 
        return $dalAtividade->Insert($atividade);
    }

    public function Update(\MODEL\Atividade $atividade){
        $dalAtividade = new \DAL\Atividade();   
 
        return $dalAtividade->Update($atividade);
    }

   public function Delete(int $id){   
        $dalAtividade = new \DAL\Atividade();   
        return $dalAtividade->Delete($id);
    }


}
?>