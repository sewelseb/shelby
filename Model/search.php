<?php
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
    $deezerApi = new DeezerAPI();
    $album = $deezerApi->searchAlbum($_POST['search']);
    $trackAPi = $deezerApi->searchTrack($album->tracklist);
    //var_dump($album->tracks);
    if(!$trackRepo->albumAlreadyExist($bdd, $_POST['search']))
    {
        foreach ($trackAPi->data as $deezerTrack)
        {
            $track = new Track();
            $track->setAlbumDeezerId($_POST['search']);
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
            $track->setGender($album->genres->data[0]->name);
            $track->setRecordingDate($album->release_date);
            $track->setFirstDateOfRelease($album->release_date);

            $trackRepo->save($track, $bdd);

            var_dump($track);

        }
        header('Location: index.php?page=landing');

    }
    else
    {
        header('Location: index.php?page=landing&alreadyImported=true');
    }

}
else
{
//    echo 'not connected';
    header('Location: index.php');
}