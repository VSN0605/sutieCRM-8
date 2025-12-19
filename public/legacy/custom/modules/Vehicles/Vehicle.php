<?php

if(!defined('sugarEntry') || !sugarEntry){
    die('Not a valid entry point');
}

require_once('data/SugarBean.php');

class Vehicle extends SugarBean{
    public $new_schema = true;
    public $module_dir = 'Vehicles';
    public $object_name = 'Vehicle';
    public $table_name = 'vehicles';
    public $importable = true;
    // public $id;
    // public $name;
    // public $date_entered;
    // public $date_modified;
    // public $modified_user_id;
    // public $created_by;
    // public $description;
    // public $deleted;

    public function __construct() {
        parent::__construct();
        $this->setupCustomFields('Vehicles');
    }
}