<?php
$valid_users = array(
    'Rumen' => '1111',
);
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (isset($valid_users[$username]) && $valid_users[$username] == $password) {
        session_start();
        $_SESSION['username'] = $username;
        setcookie(session_name(), session_id(), 0, true, true);
        header('Location: index.php');
        exit();
    } else {
        echo 'Invalid username or password';
    }
}

session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Welcome, $username! <a href=\"logout.php\">Logout</a>";
    session_destroy();
} else {
    echo <<<HTML
        <form method="post">
            <label>Username: <input type="text" name="username"></label><br>
            <label>Password: <input type="password" name="password"></label><br>
            <input type="submit" name="submit" value="Login">
        </form>
HTML;
}
