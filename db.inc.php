<?php
define ('MYSQL_HOSTNAME', 'localhost');
define ('MYSQL_USERNAME', 'admin');
define ('MYSQL_PASSWORD', 'admin123');
define ('MYSQL_DATABASE', 'demodb');

require_once('mysql_db.class.php');

$db = new mysql_db();
$db->connect(MYSQL_HOSTNAME, MYSQL_USERNAME, MYSQL_PASSWORD) or die(mysql_error());
$db->select(MYSQL_DATABASE) or die(mysql_error());
$db->set_magic_quotes_off();

?>