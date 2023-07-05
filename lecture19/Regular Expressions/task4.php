<?php
/*Приложете регулярен израз, който съответства на валидни IP 
адреси, включително IPv4 и IPv6 адреси*/
$ipv4_regex = '/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
$ipv6_regex = '/^(?:[A-F0-9]{1,4}:){7}[A-F0-9]{1,4}$/i';

$ipv4_address = '192.168.0.1';
$ipv6_address = '2001:0db8:85a3:0000:0000:8a2e:0370:7334';

if (preg_match($ipv4_regex, $ipv4_address)) {
  echo $ipv4_address . ' is a valid IPv4 address.';
} else {
  echo $ipv4_address . ' is not a valid IPv4 address.';
}

echo "\n";

if (preg_match($ipv6_regex, $ipv6_address)) {
  echo $ipv6_address . ' is a valid IPv6 address.';
} else {
  echo $ipv6_address . ' is not a valid IPv6 address.';
}
?>
