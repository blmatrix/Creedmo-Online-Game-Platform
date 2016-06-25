<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this -> load -> helper(array('form', 'url', 'location'));
    }

    function upload($upload_type) {
        if ($upload_type == "excel") {
            $game_vender = strtoupper($this -> input -> post('vender'));
            $config['upload_path'] = "./uploads/excel/{$game_vender}/";
            $config['allowed_types'] = 'xls|xlsx';
            
            $this -> load -> library('upload', $config);
           
            if (!$this -> upload -> do_upload()) {
                $error = array('error' => $this -> upload -> display_errors());
                echo var_dump($error);
            } else {
                $data = $this -> upload -> data();
                $ext = substr($data['file_name'], strrpos($data['file_name'], "."));
                $original_file = $data['file_path'] . $data['file_name'];
                $new_file = $data['file_path'] . strtoupper($game_vender) . '_' . uniqid(date("Ymd") . "_") . $ext;

                rename($original_file, $new_file);
                locationReload("parent");
            }
        } else {

        }
    }

}
