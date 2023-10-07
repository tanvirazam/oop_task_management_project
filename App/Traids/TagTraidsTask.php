<?php 

namespace App\Traids;


trait TagTraidsTask{
    protected $tag=[];


    //method

    public function addTag($tags){
        $this->tag[]=$tags;
    }

    public function getTages(){
        return $this->tag;
    }
}