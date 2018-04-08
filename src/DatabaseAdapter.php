<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 08/04/18
 * Time: 02:53 م
 */

namespace Acme;


use PDO;

class DatabaseAdapter
{
    private $connection;

    public function __construct(PDO $connection){

        $this->connection = $connection;
    }


    public function fetchAll($tableName){
        return $this->connection->query('select * from '.$tableName)->fetchAll();

    }
    public function query($sql , $parameters){

        $this->connection->prepare($sql)->execute($parameters);

    }
}