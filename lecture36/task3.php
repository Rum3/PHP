<?php 

class Config {
    private $settings;

    public function __construct() {
        $this->settings = new stdClass();
    }

    public function set(string $key, $value) {
        $this->settings->$key = $value;
    }

    public function get(string $key) {
        return isset($this->settings->$key) ? $this->settings->$key : null;
    }

    public function remove(string $key) {
        if(isset($this->settings->$key)){
            unset($this->settings->$key);
        }
    }

    public function has(string $key) {
        return isset($this->settings->$key);
    }

    public function clear() {
        $this->settings = new stdClass();
    }
}

$config = new Config();

$config->set('name', 'John');
$config->set('age', 25);
$config->set('email', 'john@example.com');


$name = $config->get('name');
echo $name;

$config->remove('age');

if($config->has('email')){
    echo "Email exists";
} else {
    echo "Email does not exist";
}

$config->clear();

?>