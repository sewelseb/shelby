<?php
require_once ('Objects/UserRepository.php');
require_once ('Objects/DeezerAPI.php');
require_once ('Objects/Track.php');

$userRepo = new UserRepository();
//var_dump($_SESSION);
$conectionTest = $userRepo->testConnectUser($bdd, $_SESSION['username'], $_SESSION['password']);
//var_dump($conectionTest);
if($conectionTest)
{
    $deezerApi = new DeezerAPI();
    $album = $deezerApi->searchAlbum($POST['search']);
    $trackAPi = $deezerApi->searchTrack($deezerTrack->tracklist);
    //var_dump($album->tracks);
    foreach ($trackAPi->data as $deezerTrack)
    {
        $track = new Track();
        $track->setAlbumDeezerId($POST['search']);
        $track->setTrackDeezerId($deezerTrack->id);
        $track->setArtist($deezerTrack->artist->name);
        $track->setAlbumTitle($album->title);
        $track->setUpc($album->upc);
        $track->setCatalog($album->upc);
        $track->setReleaseDate($album->release_date);
        $track->setMarketingLabel($album->label);
        $track->setIsrc($deezerTrack->isrc);
        $track->setTrackTitle($deezerTrack->title);
        $track->setTrackArtist($deezerTrack->artist->name);
        $track->setGender($album->data[0]->name);
        $track->setRecordingDate($album->release_date);
        $track->setFirstDateOfRelease($album->release_date);


        var_dump($track);
    }

}
else
{
//    echo 'not connected';
    header('Location: index.php');
}