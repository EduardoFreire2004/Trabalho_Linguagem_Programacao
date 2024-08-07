<?php
namespace BLL;
include_once  'C:\xampp\htdocs\projeto-escolar-php\DAL\Professor.php';
use DAL;

class Professor
{
    public function Select(){   
        $dalProfessor = new \DAL\Professor();   
        return $dalProfessor->Select();
    }

    public function SelectByID(int $id)
    {   
        $dalProfessor = new \DAL\Professor();   
        return $dalProfessor->SelectByID($id);
    }

    public function Insert(\MODEL\Professor $professor){
        $dalProfessor = new \DAL\Professor();   
        
        return $dalProfessor->Insert($professor);
    }


    public function Update(\MODEL\Professor $professor){
        $dalProfessor = new \DAL\Professor();   
        
        return $dalProfessor->Update($professor);
    }

   public function Delete(int $id){   
        $dalProfessor = new \DAL\Professor();   
        return $dalProfessor->Delete($id);
    }



}
?>