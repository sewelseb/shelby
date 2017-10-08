<?php

use Doctrine\ORM\EntityRepository;

class UserRepository
{

    public function testConnectUser(PDO $PDO, $username, $password)
    {
        $res = $PDO->query('SELECT * FROM user WHERE username =\''.$username.'\'');

        //var_dump($PDO);
        //echo "\nPDO::errorCode(): ", $PDO->errorCode();
        if (sizeof($res)>0)
        {
            try{
                foreach  ($res as $user) {
                    if($user['password'] == $password)
                    {
                        return true;
                        break;
                    }
                }
            }catch (Exception $e)
            {

            }

        }

        return false;

    }
}