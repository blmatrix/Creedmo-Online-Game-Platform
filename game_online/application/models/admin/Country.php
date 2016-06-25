<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Country extends MY_Model {
    public function __construct() {
        parent::__construct();
    }

    public function get_country_by_ip($ip) {
        $ip_int = $ip; 
        if (gettype($ip) == 'string'){
            $ip_int =  sprintf('%u',ip2long($ip));
        }
        $sql = " SELECT * FROM country WHERE ? >= INET_ATON(ip_scope1_str) AND ? <= INET_ATON(ip_scope2_str)";
        $query_binding = array($ip_int, $ip_int);
        $query = $this -> raw_binding_query($sql,$query_binding);
        
        if (!empty($query)){
            return $query[0];
        }else {
            return NULL;
        }
    }
}
