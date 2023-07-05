<?php

class MyClass implements ArrayAccess {
    private $container = [];

    public function offsetSet($offset,$value){
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value ; 
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
         unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

$myArr = new MyClass();
$myArr['key1'] = 'value1';
echo $myArr['key1'];
