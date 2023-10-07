<?php

use App\Classes\DeadlineTask;
use App\Classes\TagDeadLineTask;

include 'autoload.php';

$Task1 = new TagDeadLineTask('Task1', 'monday desp', '2-2-2023', '1-6-2023');

$Task1->addTag('frontend');
$Task1->addTag('contact page');
$Task1->addAssign('jishan');
$Task1->addAssign('tanvir');


$Task2 = new DeadlineTask('Task2', 'sunday desp', '8-2-2023', '3-6-2023');

$Task2->addAssign('bayazid');

$Task = [$Task1, $Task2];

foreach ($Task as $TaskValue) {
    echo "Tittle:" . $TaskValue->getTittle() . PHP_EOL;
    echo "Description:" . $TaskValue->getDescription() . PHP_EOL;
    echo "Start Date:" . $TaskValue->getStartDate() . PHP_EOL;
    echo "Due Date:" . $TaskValue->getDueDate() . PHP_EOL;

    if ($TaskValue instanceof TagDeadLineTask) {
        echo "Tag:" . implode(', ', $TaskValue->getTages()) . PHP_EOL;
        echo "Priority" .$TaskValue->getPriority() .PHP_EOL;
        echo "Completed" .($TaskValue->isCompleted()?'YES':"NO") .PHP_EOL;
    }
}
