<?php
class Config {
    private $settings;

    public function __construct() {
        $this->settings = new stdClass();
    }

    public function set($key, $value) {
        $this->settings->$key = $value;
    }

    public function get($key, $default = null) {
        if (isset($this->settings->$key)) {
            return $this->settings->$key;
        }
        return $default;
    }

    public function all() {
        return $this->settings;
    }

    public function delete($key) {
        unset($this->settings->$key);
    }
}
