<?php
//FrontControler

//session_start();
//session_cache_limiter('private_no_expire, must-revalidate');
//setlocale (LC_TIME, 'fr_FR');
//date_default_timezone_set('Europe/Berlin');
//initialisation of cash =>  html code will pop when calling ob_end_flush()
ob_start();
//error display (comment in prod)
error_reporting(E_ALL);
ini_set("display_errors", 1);
//if GET param

require_once "vendor/autoload.php";

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

if (!empty($_GET['page']) && is_file('Controller/'.$_GET['page'].'.php'))
{
    $tabSecurity= explode("..", $_GET['page']);
    if (substr($_GET['page'], 0)=="." || count($tabSecurity)>1)
    {
        header ('location: index.php?page=home');
    }
    else
    {
        include_once ('./Model/connexionDB.php');
        include ('Controller/'.$_GET['page'].'.php');
    }
}
else
{
    include ('Controller/home.php');
}
ob_end_flush();
//closing data base connexion
if (isset($bdd))
{
    $bdd = null;
}
?>