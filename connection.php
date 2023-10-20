<?php
$db = new mysqli('localhost', 'root', '', 'care');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>