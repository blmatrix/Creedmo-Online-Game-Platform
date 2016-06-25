<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Col_constants_generator extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this -> load -> model('admin/admin');
        $this -> load -> helper('url');
        $this -> load -> helper('location');
        $this -> load -> library('form_validation');
        $this -> load -> library('baofa_manager');
    }

    public function index() {
        $this -> signin();
    }

    public function generate() {
        $this -> load -> database();
        $file_path = 'collumn_define.php';
        $file_data = "<?php defined('BASEPATH') OR exit('No direct script access allowed');";
        $file_data .= "\n\n";
        $tables = $this -> db -> list_tables();
        $this -> load -> helper('file');
        foreach ($tables as $table) {
            $table_holder = strtoupper($table);
            $file_data .= "/*"; 
            $file_data .= "\n";
            $file_data .= "* {$table_holder} Table"; 
            $file_data .= "\n";
            $file_data .= "*/"; 
            $file_data .= "\n";
            $file_data .= "define('{$table_holder}','{$table}');\n";
            $fields = $this -> db -> field_data($table);
            foreach ($fields as $field) {
                $column_holder = strtoupper($field -> name);
                $file_data .= "define('{$table_holder}_{$column_holder}','{$field -> name}');\n";
            }
            $file_data .= "\n";
        }
        write_file($file_path, $file_data);
        echo "테이블 및 define 생성 완료";
    }
}
