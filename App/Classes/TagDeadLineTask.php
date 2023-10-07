<?php 

namespace App\Classes;

use App\Classes\DeadlineTask;
use App\Traids\TagTraidsTask;
use App\Traids\HasAssignTrait;

class TagDeadLineTask extends DeadlineTask{
    use HasAssignTrait,TagTraidsTask;
}