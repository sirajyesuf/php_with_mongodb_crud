<?php

require_once('Database.php');

abstract class Model extends Database {

    public $collection;

    public function __construct()
    {
        parent::__construct();
        $this->collection = $this->getCollection();
    }

    protected abstract function getCollection();

    public function all()
    {
        return $this->collection->find([]);
    }

    public function create($data)
    {
        $this->collection->insertOne($data);
    }


    public function find($_id)
    {
        return $this->collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_id)]);
    }

    public function update($_id, $data)
    {
        $this->collection->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_id)],
            ['$set' => $data]
        );
    }

    public function delete($_id)
    {
        $this->collection->deleteOne([
            '_id' => new MongoDB\BSON\ObjectID($_id)
        ]);
    }

}

?>