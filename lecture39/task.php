<?php
class Singleton {
    private static $instance;
    private function __construct() {
        session_start();
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function get($key) {
        return $_SESSION[$key] ?? null;
    }

    public function delete($key) {
        unset($_SESSION[$key]);
    }
}

class Model {
    public function login($username, $password) {
        $session = Singleton::getInstance();
        $session->set('username', $username);
    }

    public function isLoggedIn() {
        $session = Singleton::getInstance();
        return $session->get('username') !== null;
    }
}

class Controller {
    private $authModel;

    public function __construct() {
        $this->authModel = new Model();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->authModel->login($username, $password);
        }
    }

    public function isLoggedIn() {
        return $this->authModel->isLoggedIn();
    }
}

class View {
    public function renderLoginForm() {
        echo '<form method="POST" action="login.php">';
        echo '<input type="text" name="username" placeholder="Потребителско име">';
        echo '<input type="password" name="password" placeholder="Парола">';
        echo '<button type="submit">Вход</button>';
        echo '</form>';
    }

    public function renderLoginStatus($isLoggedIn) {
        echo "Здравей";
    }
}

$controller = new Controller();
$view = new View();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'login':
            $view->renderLoginForm();
            $controller->login();
            break;
        default:
            $view->renderLoginStatus($controller->isLoggedIn());
            break;
    }
    } else {
    $view->renderLoginStatus($controller->isLoggedIn());
    }

$view = new View();
$view->renderLoginForm();


?>
