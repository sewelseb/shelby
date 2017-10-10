<?php
require_once ('Objects/UserRepository.php');
require_once ('Objects/TrackRepository.php');
require_once ('Objects/Track.php');

$userRepo = new UserRepository();
//var_dump($_SESSION);
$conectionTest = $userRepo->testConnectUser($bdd, $_SESSION['username'], $_SESSION['password']);
//var_dump($conectionTest);
if($conectionTest)
{
    $trackRepo = new TrackRepository();
    $traks = $trackRepo->getAllNotSaved($bdd);
    //var_dump($traks);
}
else
{
//    echo 'not connected';
    header('Location: index.php');
}