<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

return ConsoleRunner::createHelperSet($entityManager);