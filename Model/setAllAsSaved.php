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
require_once ('Objects/FichierExcel.php');

$userRepo = new UserRepository();
//var_dump($_SESSION);
$conectionTest = $userRepo->testConnectUser($bdd, $_SESSION['username'], $_SESSION['password']);
//var_dump($conectionTest);
$trackRepo = new TrackRepository();
if($conectionTest)
{
    $trackRepo = new TrackRepository();
    $traks = $trackRepo->getAllNotSaved($bdd);
    $trackRepo->setAllAsSaved($bdd);


    $fichier = new FichierExcel();
    $fichier->Colonne("album id;artist;album title;Album Version; UPC; Catalog; Release Date; Marketing Label;Disk #;Track#; 	ISRC; 	Track Title; 	Still Fighting; 	Track Artist ;	Track Timing ;	Explicit(Y/N); 	Genre; 	Recording Date; 	Recording Location; 	First Date of Release; 	First Country of Release ");
    foreach ($traks as $trak)
    {
        $fichier->Insertion($trak->getAlbumDeezerId().";".$trak->getArtist().";".$trak->getAlbumTitle().";;".$trak->getUPC().";".$trak->getCatalog().";".$trak->getReleaseDate().";".$trak->getMarketingLabel().";;".$trak->getTrackDeezerId().";".$trak->getIsrc().";".$trak->getTrackTitle().";;".$trak->getTrackArtist().";;;".$trak->getGender().";".$trak->getRecordingDate().";;".$trak->getFirstDateOfRelease().";");
    }
    //ici on peut faire une boucle si nécessaire.
    $fichier->output('NomFichier');
}
