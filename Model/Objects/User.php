<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 08-10-17
 * Time: 15:48
 */

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity() */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(length=255)
     */
    private $username;

    /**
     * @ORM\Column(length=255)
     */
    private $password;

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


    

}