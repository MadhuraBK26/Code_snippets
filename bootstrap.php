<?php

require 'connection.php';

require 'querybuilder.php';

//$pdo = Connection::make();

return new QueryBuilder(

	Connection::make($config['database'])

);