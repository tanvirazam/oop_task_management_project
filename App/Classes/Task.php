<?php 

namespace App\Classes;

abstract class Task{
    protected $tittle;
    protected $description;
    protected $completed;

    //method call

    public function __construct($tittle,$description){
        $this->tittle=$tittle;
        $this->description=$description;
        $this->completed=false; 
    }

    //abstruct method

    abstract public function getPriority();
    abstract public function marksAsCompleted();

    //getter

    public function getTittle(){
        return $this->tittle;
    }
    public function getDescription(){
        return $this->description;
    }

    public function isCompleted(){
        $this->completed;
    }



}