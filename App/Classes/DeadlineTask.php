<?php 

namespace App\Classes;

use App\Classes\Task;
use App\Traids\HasAssignTrait;
use App\Interfaces\dueDateInterface;
use App\Interfaces\StartDateInterface;


class DeadlineTask extends Task implements  StartDateInterface, dueDateInterface{

    use HasAssignTrait;
    protected $startDate;
    protected $dueDate;

    //method 

    public function __construct($tittle,$description,$startDate,$dueDate,){
        parent::__construct($tittle,$description);

        $this->startDate=$startDate;
        $this->dueDate=$dueDate;
    }

     public function getPriority(){
        return 'low';
    }
     public function marksAsCompleted(){
        $this->completed=true;
     }

    //getter

    public function getStartDate(){
        return $this->startDate;
    }

    public function getDueDate(){
        return $this->dueDate;
    }
}