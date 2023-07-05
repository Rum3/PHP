<?php
class SuperGlobals implements ArrayAccess {

protected static $post;
protected static $get;
protected static $session;

public function __construct() {
    self::$post = $_POST;
    self::$get = $_GET;
    if(isset($_SESSION)){
        self::$session = $_SESSION;
    } else{
        self::$session = [];
    }
}

public function __set($key, $value) {
    if (isset(self::$post[$key])) {
        self::$post[$key] = $value;
    } elseif (isset(self::$get[$key])) {
        self::$get[$key] = $value;
    } elseif (isset(self::$session[$key])) {
        self::$session[$key] = $value;
    }
}

public function __get($key) {
    if (isset(self::$post[$key])) {
        return self::$post[$key];
    } elseif (isset(self::$get[$key])) {
        return self::$get[$key];
    } elseif (isset(self::$session[$key])) {
        return self::$session[$key];
    } else {
        return null;
    }
}

public function __isset($key) {
    return isset(self::$post[$key]) || isset(self::$get[$key]) || isset(self::$session[$key]);
}

public function __unset($key) {
    if (isset(self::$post[$key])) {
        unset(self::$post[$key]);
    } elseif (isset(self::$get[$key])) {
        unset(self::$get[$key]);
    } elseif (isset(self::$session[$key])) {
        unset(self::$session[$key]);
    }
}

public function offsetExists($offset) {
    return isset(self::$post[$offset]) || isset(self::$get[$offset]) || isset(self::$session[$offset]);
}

public function offsetGet($offset) {
    return $this->__get($offset);
}

public function offsetSet($offset, $value) {
    $this->__set($offset, $value);
}

public function offsetUnset($offset) {
    $this->__unset($offset);
}

}
$superGlobals = new SuperGlobals();

$superGlobals->myKey = 'myValue';
var_dump($superGlobals->myKey);

$myValue = $superGlobals->myKey;

if (isset($superGlobals->myKey)) {
   var_dump($superGlobals->myKey);
}

unset($superGlobals->myKey);
$superGlobals = new SuperGlobals();

$superGlobals['myKey'] = 'myValue';
$myValue = $superGlobals['myKey'];
var_dump($myValue);

if (isset($superGlobals['myKey'])) {

}

unset($superGlobals['myKey']);

