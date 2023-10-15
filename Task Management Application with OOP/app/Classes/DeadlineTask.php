<?php

namespace app\Classes;

use app\Classes\Task;
use app\Traits\HasAssigneeTrait;
use app\Interfaces\HasDueDateInterface;
use app\Interfaces\HasStartDateInterface;

class DeadlineTask extends Task implements HasStartDateInterface, HasDueDateInterface{
    
    use HasAssigneeTrait;
    
    protected $startDate;
    protected $dueDate;

    //Methods
    public function __construct($title, $description, $startDate, $dueDate){
        parent::__construct($title, $description);
        $this->startDate = $startDate;
        $this->dueDate = $dueDate;
    }

    //Getters
    public function getStartDate(){
        return $this->startDate;
    }
    public function getDueDate(){
        return $this->dueDate;
    }

    //Abstract class from parent class
    function getPriority(){
        return "Low";
    }

    function markAsCompleted(){
        $this->completed = true;
    }

}