<?php

if(!defined('sugarEntry') || !sugarEntry){
    die('Not A Valid Entry Point');
}

class AccountAfterSave
{
    public function handleAfterSave($bean, $event, $arguments)
    {
        if(!empty($bean->fetched_row) && $bean->fetched_row['name'] === $bean->name) {
            return;
        }

        $GLOBALS['log']->fatal(
            'Accounts after_save hook triggered. ID: ' . $bean->id
        );

        // $logger = \LoggerManager::getLogger();

        // $logger->fatal('Vehicle after save hook triggered: ' . $bean->id);
    }
}