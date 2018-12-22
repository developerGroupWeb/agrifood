<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 22/12/2018
 * Time: 11:14
 */

class DB
{
    protected static $db;

    static protected function setDb(){

        $db = new PDO('mysql:host=127.0.0.1; dbname=api; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    static function getDb(){

        if(self::$db == null){

            self::setDb();
        }
        return self::$db;
    }
}