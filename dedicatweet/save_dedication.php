<?php
/* Save the Tweet Dedication to Database. */
require_once '../database.php';
$myDB = new Database($db['host'], $db['username'], $db['password'], $db['database']);
$myDB->connect();

$table = "dedications";

print_r($_POST);

//$data = array("user_id"=>$_POST['user'])


