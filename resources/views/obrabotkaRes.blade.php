<?php

$balance = $_POST['balance'];
$name = $_POST['name'];
$id = $_POST['res'];
$host = 'my.srvup.ru'; // Server host name or IP
$port = 30046;                      // Port rcon is listening on
$password = 'DJAKEIARJNJDJSI21JSJFG'; // rcon.password setting set in server.properties
$timeout = 3;                       // How long to timeout.

use Thedudeguy\Rcon;

$rcon = new Rcon($host, $port, $password, $timeout);

if ($rcon->connect()) {

    $actionCost = $_POST['actionCost'];

    if ($balance >= $actionCost) {
        $rcon->sendCommand("give ".$name." ".$res);
        // Выведите сообщение об успешном выполнении
        echo "Действие выполнено. Остаток на балансе: " . ($balance - $actionCost) . " рублей.";
    } else {
        // Выведите сообщение о недостаточном балансе
        echo "Недостаточно денег. Ваш баланс: " . $balance . " рублей.";
    }
} else {
    // Выведите сообщение об ошибке подключения
    echo "Ошибка подключения к RCON серверу.";
}

?>
<html>
<meta http-equiv="refresh" content="5; url=/dashboard">
</html>

