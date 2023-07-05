<?php
// показва името на сървъра
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "\n";

// показва HTTP потребителския агент
echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n";

// показва IP адреса на клиента
echo "Client IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";

// показва метода на HTTP заявката (GET, POST, PUT, DELETE и т.н.)
echo "HTTP Request Method: " . $_SERVER['REQUEST_METHOD'] . "\n";
?>
