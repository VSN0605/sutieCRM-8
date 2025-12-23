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

    // public function __construct() {
    //     parent::__construct();
    //     $this->setupCustomFields('Vehicles');
    // }
}