<?php
class Fieldmodelbinder  extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function bind() {
        $class = new ReflectionClass(get_class($this));
        $properties = $class -> getProperties();
        for ($i = 0; $i < count($properties); $i++) {
            $property_name = $properties[$i] -> getName();
            $this -> $property_name = $this-> input -> post('name', TRUE, 'topayc');

        }
        echo var_dump($this);
    }

    public function bindWithArray($parmas) {
        $class = new ReflectionClass(get_class($this));
        $properties = $class -> getProperties();

        for ($i = 0; $i < count($properties); $i++) {
            $property_name = $properties[$i] -> getName();
            $this -> $property_name = $params[$property_name];
        }
        echo var_dump($this);
    }
    
    public function setQueryCondition($instane){
    }
}
