<?php
$database=require 'bootstrap.php';

$taskas= $database->selectAll('todos');
require 'index.hideview.php';
