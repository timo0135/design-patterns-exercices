<?php
require('../vendor/autoload.php');

use App\MySQLQueryBuilder;

$queryBuilder = new MySQLQueryBuilder();
$sql = $queryBuilder->select('users', ['id', 'name', 'email'])
                    ->where('status', 'active')
                    ->limit(10)
                    ->getSQL();

echo $sql; // Affichera: SELECT id, name, email FROM users WHERE status = 'active' LIMIT 10