<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_phone_code_xml extends CI_Controller {
    public $langs;

    public function __construct() {
        parent::__construct();
    }

    function set() {
        $this -> load -> model('admin/country');
        echo APPPATH;
        echo '</br>';

        $doc = new DOMDocument();
        $doc -> load(APPPATH . '../webtest/country-phone-codes.xml');
        $countries = $doc -> getElementsByTagName("country");
        echo "<br/>";
        
        $i=0;
        foreach ($countries as $country) {
            $c_code = strtoupper(trim($country -> getAttribute('code')));
            $p_code = trim($country -> getAttribute('phoneCode'));
            $t = array(
                $p_code, $c_code
            );
            
            $sql = "update country set phone_code = ? where country_code = ?";
            $this -> country -> raw_binding($sql, $t);
            $i++;
            echo $i . "row is finished";
            echo "<br/>";
        }
        echo 'Process is finished';

    }

}
