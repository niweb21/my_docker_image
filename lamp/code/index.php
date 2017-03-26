<?php

$mysqli = new mysqli('db', 'db_user', 'db_pwd');

if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}
echo 'Successful connection to MySQL: ' . $mysqli->host_info;

phpinfo();
