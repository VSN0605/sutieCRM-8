<?php

if(!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class AccountAfterDelete
{
    public function handleAfterDelete($bean, $event, $arguments)
    {
        // if(!empty($bean->fetched_row) && $bean->fetched_row['name'] === $bean->name){
        //     return;
        // }

        $GLOBALS['log']->fatal('Account after_delete hook trigerred. ID ' . $bean->id);

    }
}