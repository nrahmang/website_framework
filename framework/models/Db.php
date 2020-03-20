<?php namespace Model;

use PDO;

class Db {

    static private $read = false;
    static private $write = false;

    /**
     * @return bool|PDO
     */
    static public function read(){
        if( !self::$read ) {
            self::$read = new PDO('mysql:host=localhost;port=3306;dbname=', '', '', array(
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ));
        }
        return self::$read;
    }

    /**
     * @return bool|PDO
     */
    static public function write(){
        if( !self::$write ) {
            self::$write = new PDO('mysql:host=localhost;port=3306;dbname=', '', '', array(
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ));
        }
        return self::$write;
    }


}
