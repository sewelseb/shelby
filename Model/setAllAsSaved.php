<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 10-10-17
 * Time: 09:07
 * setAllAsSaved.php
 */
require_once ('Objects/UserRepository.php');
require_once ('Objects/DeezerAPI.php');
require_once ('Objects/Track.php');
require_once ('Objects/TrackRepository.php');

$userRepo = new UserRepository();
//var_dump($_SESSION);
$conectionTest = $userRepo->testConnectUser($bdd, $_SESSION['username'], $_SESSION['password']);
//var_dump($conectionTest);
$trackRepo = new TrackRepository();
if($conectionTest)
{
    $trackRepo->setAllAsSaved($bdd);
    header('Location: index.php?page=landing');
}
else
{
//    echo 'not connected';
    header('Location: index.php');
}
