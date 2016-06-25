<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

 class Comp_conversion_policy extends MY_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function get_comp_policy(){
        return $this -> advanced_search_row();
    }
    
}