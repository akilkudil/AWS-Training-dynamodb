<?php
require 'vendor/autoload.php';
use Aws\DynamoDb\DynamoDbClient;

$client = new DynamoDbClient([
    'profile' => 'default',
    'region'  => 'us-west-2',
    'version' => 'latest',
    'endpoint' => 'http://localhost:8000'
]);

$result = $client->getItem(array(
    'TableName' => 'MusicCollection',
    'Key'       => array(
        'Artist'   => array('S' => 'SPB'),
        'SongTitle' => array('S' => 'Pon malai pozhuthu')
    )
));

var_dump($result["Item"]);
?>