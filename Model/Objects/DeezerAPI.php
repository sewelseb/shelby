<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 08-10-17
 * Time: 17:40
 */

class DeezerAPI
{
    private $albumURL= "https://api.deezer.com/album/";



    public function searchAlbum($albumId)
    {
        $curl = curl_init();

        return json_decode(file_get_contents($this->albumURL.$albumId));
    }

    public function searchTrack($trackUrl)
    {
        $curl = curl_init();

        return json_decode(file_get_contents($trackUrl));
    }
}