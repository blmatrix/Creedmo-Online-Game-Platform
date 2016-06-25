<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionInitializer {
    public $CI;

    function __construct() {
        $this -> CI = & get_instance();
    }

    function initialize($params) {
        $this -> CI -> load -> helper('url');
        $segment1 = $this -> CI -> uri -> segment(1, FALSE);
        $segment3 = $this -> CI -> uri -> segment(3, FALSE);
        if ($segment1 == 'admin') {
            if ($segment3 != 'signin') {
                if (!$this -> CI -> session -> userdata(ADMIN_SESSION)) {
                    redirect('/admin/adminauth/signin');
                }
            }
        }
        
    }
}
