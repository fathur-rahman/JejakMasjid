<?php 
define('host', 'localhost');
define('user', 'root');
define('pass', '');
define('db', 'masjid_db');

$conn = mysqli_connect(host, user, pass, db) or die('Unable to Connect');
?>