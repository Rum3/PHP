<?php
namespace app\child;

use app\abstract\SuperGlobals;

class Post extends SuperGlobals {
    public function __construct() {
        parent::__construct($_POST);
    }
}

class Get extends SuperGlobals {
    public function __construct() {
        parent::__construct($_GET);
    }
}

class Session extends SuperGlobals {
    public function __construct() {
        session_start();
        parent::__construct($_SESSION);
    }
}