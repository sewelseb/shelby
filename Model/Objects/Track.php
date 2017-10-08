<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 08-10-17
 * Time: 18:05
 */

class Track
{
    private $id;
    private $trackDeezerId;
    private $albumDeezerId;
    private $artist;
    private $albumTitle;
    private $upc; //=catalog
    private $catalog;
    private $releaseDate;
    private $marketingLabel;
    private $isrc;
    private $trackTitle;
    private $trackArtist;
    private $gender;
    private $recordingDate;
    private $firstDateOfRelease;
    private $firstCountryOfRelease;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTrackDeezerId()
    {
        return $this->trackDeezerId;
    }

    /**
     * @param mixed $trackDeezerId
     */
    public function setTrackDeezerId($trackDeezerId)
    {
        $this->trackDeezerId = $trackDeezerId;
    }

    /**
     * @return mixed
     */
    public function getAlbumDeezerId()
    {
        return $this->albumDeezerId;
    }

    /**
     * @param mixed $albumDeezerId
     */
    public function setAlbumDeezerId($albumDeezerId)
    {
        $this->albumDeezerId = $albumDeezerId;
    }


    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param mixed $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * @return mixed
     */
    public function getAlbumTitle()
    {
        return $this->albumTitle;
    }

    /**
     * @param mixed $albumTitle
     */
    public function setAlbumTitle($albumTitle)
    {
        $this->albumTitle = $albumTitle;
    }

    /**
     * @return mixed
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * @param mixed $upc
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;
    }

    /**
     * @return mixed
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * @param mixed $catalog
     */
    public function setCatalog($catalog)
    {
        $this->catalog = $catalog;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return mixed
     */
    public function getMarketingLabel()
    {
        return $this->marketingLabel;
    }

    /**
     * @param mixed $marketingLabel
     */
    public function setMarketingLabel($marketingLabel)
    {
        $this->marketingLabel = $marketingLabel;
    }

    /**
     * @return mixed
     */
    public function getIsrc()
    {
        return $this->isrc;
    }

    /**
     * @param mixed $isrc
     */
    public function setIsrc($isrc)
    {
        $this->isrc = $isrc;
    }

    /**
     * @return mixed
     */
    public function getTrackTitle()
    {
        return $this->trackTitle;
    }

    /**
     * @param mixed $trackTitle
     */
    public function setTrackTitle($trackTitle)
    {
        $this->trackTitle = $trackTitle;
    }

    /**
     * @return mixed
     */
    public function getTrackArtist()
    {
        return $this->trackArtist;
    }

    /**
     * @param mixed $trackArtist
     */
    public function setTrackArtist($trackArtist)
    {
        $this->trackArtist = $trackArtist;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getRecordingDate()
    {
        return $this->recordingDate;
    }

    /**
     * @param mixed $recordingDate
     */
    public function setRecordingDate($recordingDate)
    {
        $this->recordingDate = $recordingDate;
    }

    /**
     * @return mixed
     */
    public function getFirstDateOfRelease()
    {
        return $this->firstDateOfRelease;
    }

    /**
     * @param mixed $firstDateOfRelease
     */
    public function setFirstDateOfRelease($firstDateOfRelease)
    {
        $this->firstDateOfRelease = $firstDateOfRelease;
    }

    /**
     * @return mixed
     */
    public function getFirstCountryOfRelease()
    {
        return $this->firstCountryOfRelease;
    }

    /**
     * @param mixed $firstCountryOfRelease
     */
    public function setFirstCountryOfRelease($firstCountryOfRelease)
    {
        $this->firstCountryOfRelease = $firstCountryOfRelease;
    }




}