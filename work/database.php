<?php
require 'functions.php';
require 'Task.php';
$pdo=connectToDb();
$tasks=fetchAllTasks($pdo);
require 'indexdatabase.php';

?>