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

?>
