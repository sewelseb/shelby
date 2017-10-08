<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


$paths = array("/Model/objects/User.php");
$isDevMode = false;

// the connection configuration
$dbParams = array(
'driver'   => 'pdo_mysql',
'user'     => 'root',
'password' => 'root',
'dbname'   => 'shelby',
);
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__), $isDevMode);
$conn = array(
'driver' => 'pdo_sqlite',
'path' => __DIR__ . '/db.sqlite',
);

$entityManager = EntityManager::create($conn, $config);