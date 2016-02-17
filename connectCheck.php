<?php
$link = mysql_connect('localhost', 'root', '12345678');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>