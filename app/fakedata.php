<?php

require_once(__DIR__.'/../vendor/autoload.php');

$mongoClient = new MongoDB\Client;
$db = $mongoClient->web_mongo_ass1;

$collection = $db->todos;


// $read = $collection->find([]);

// foreach ($read as $value) {

//     echo "JOb: {$value['title']}<br>";
//     echo "---------------------------<br>";
// }

// $create = $collection->insertOne([
//     'title' =>"laravel tutorial "
// ]);
// $create = $collection->insertOne([
//     'title' =>"django tutorial "
// ]);
// $create = $collection->insertOne([
//     'title' =>"vuejs tutorial "
// ]);

// $delete = $collection->deleteOne([
//     '_id' => new MongoDB\BSON\ObjectID("6003c22ba367000003005ba4")
// ]);

// $update = $collection->updateOne(
//     ['_id' => new MongoDB\BSON\ObjectID("600752afe52000006b007643")],
//     ['$set' => [

//         'title' => 'todo5'
//         ]
// ]);


?>