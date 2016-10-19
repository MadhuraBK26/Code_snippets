<?php

$database = require 'bootstrap.php';

$tasks = $database->selectAll('todos');


require 'about.php';

require 'querybuilder.php';

require 'PDO_linkedfile1.php';