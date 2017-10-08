<?php
require_once ('Objects/UserRepository.php');

$userRepo = new UserRepository();

$conectionTest = $userRepo->testConnectUser($bdd, $_POST['user'], $_POST['pass']);
//var_dump($conectionTest);
if($conectionTest)
{
    $_SESSION["username"]=$_POST['user'];
    $_SESSION["password"]=$_POST['pass'];
    //var_dump($_SESSION);
    header('Location: index.php?page=landing');
}
else
{
    header('Location: index.php');
}