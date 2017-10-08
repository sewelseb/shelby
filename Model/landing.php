<?php
require_once ('Objects/UserRepository.php');

$userRepo = new UserRepository();
//var_dump($_SESSION);
$conectionTest = $userRepo->testConnectUser($bdd, $_SESSION['username'], $_SESSION['password']);
//var_dump($conectionTest);
if($conectionTest)
{

}
else
{
//    echo 'not connected';
    header('Location: index.php');
}