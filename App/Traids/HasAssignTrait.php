<?php 

namespace App\Traids;

trait HasAssignTrait{
    protected $assign=[];

    //method

    public function addAssign($assigned){
        $this->assign=$assigned;
    }

    //getter

    public function getAssign(){
        return $this->assign;
    }
}