<?php

namespace Intern\WorkflowTransition;
use Intern\WorkflowTransition;
use Intern\Internship;

class Incomplete extends WorkflowTransition {
    const sourceState = 'CompletedState';
    const destState   = 'NewState';
    const actionName  = 'Mark as Incomplete';

    public function getAllowedPermissionList(){
        return array('complete');
    }
}
