<?php
require_once(__DIR__.'/../vendor/autoload.php');


class Database {

    private $mongoClient;
    protected $db;


    public function __construct()
    {
        $this->mongoClient = new MongoDB\Client;
        $this->db = $this->mongoClient->web_mongo_ass1;
    }

    protected function createCollection($collectionName)
    {
        try {
            $this->db->createCollection($collectionName);
        } catch (MongoDB\Driver\Exception\CommandException $exception) {
            die($exception->getMessage());
        }
    }

}

?>