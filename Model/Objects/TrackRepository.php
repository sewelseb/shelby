<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 08-10-17
 * Time: 19:38
 */

class TrackRepository
{
    public function save(Track $track, PDO $pdo)
    {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = $pdo->prepare("INSERT INTO track
                    (track_deeser_id, album_deezer_id, artist, album_title, upc, catalogue, release_date, marketing_label, isrc, track_title, track_artist, gender, recording_date, first_date_of_release, first_country_of_release) VALUES 
                    (:track_deeser_id, :album_deezer_id, :artist, :album_title, :upc, :catalogue, :release_date, :marketing_label, :isrc, :track_title, :track_artist, :gender, :recording_date, :first_date_of_release, :first_country_of_release)");
        $req->execute(array(
            ":track_deeser_id" =>$track->getTrackDeezerId(),
            ":album_deezer_id" =>$track->getAlbumDeezerId(),
            ":artist" =>$track->getArtist(),
            ":album_title" =>$track->getAlbumTitle(),
            ":upc" =>$track->getUpc(),
            ":catalogue" =>$track->getUpc(),
            ":release_date" =>$track->getReleaseDate(),
            ":marketing_label" =>$track->getMarketingLabel(),
            ":isrc" =>$track->getIsrc(),
            ":track_title" =>$track->getTrackTitle(),
            ":track_artist" =>$track->getTrackArtist(),
            ":gender" =>$track->getGender(),
            ":recording_date" =>$track->getRecordingDate(),
            ":first_date_of_release" =>$track->getFirstDateOfRelease(),
            ":first_country_of_release" =>" "
        ));
        echo "\nPDO::errorInfo():\n";
        var_dump($pdo->errorInfo());
    }

    public function albumAlreadyExist(PDO $PDO, $albumId)
    {
        $res = $PDO->query('SELECT * FROM track WHERE album_deezer_id ='.$albumId.'');
        if (sizeof($res)>0)
        {
            try{
                foreach  ($res as $user) {

                    return true;

                }
            }catch (Exception $e)
            {

            }

        }
        return false;
    }

    public function getAll(PDO $PDO)
    {
        $res = $PDO->query('SELECT * FROM track');
        $tracks = array();
        if (sizeof($res)>0)
        {
            try{
                foreach  ($res as $trackDB) {
                    $track = new Track();

                    $track->setId($trackDB['id']);
                    $track->setTrackDeezerId($trackDB['track_deeser_id']);
                    $track->setAlbumDeezerId($trackDB['album_deezer_id']);
                    $track->setArtist($trackDB['artist']);
                    $track->setAlbumTitle($trackDB['album_title']);
                    $track->setUpc($trackDB['upc']);
                    $track->setCatalog($trackDB['catalogue']);
                    $track->setReleaseDate($trackDB['release_date']);
                    $track->setMarketingLabel($trackDB['marketing_label']);
                    $track->setIsrc($trackDB['isrc']);
                    $track->setTrackTitle($trackDB['track_title']);
                    $track->setTrackArtist($trackDB['track_artist']);
                    $track->setGender($trackDB['gender']);
                    $track->setRecordingDate($trackDB['recording_date']);
                    $track->setFirstDateOfRelease($trackDB['first_date_of_release']);
                    $track->setFirstCountryOfRelease($trackDB['first_country_of_release']);


                    $tracks[]=$track;
                }
                return $tracks;
            }catch (Exception $e)
            {

            }

        }
        return array();
    }
}