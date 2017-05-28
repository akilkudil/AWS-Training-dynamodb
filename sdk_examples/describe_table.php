<?php
require 'vendor/autoload.php';
use Aws\DynamoDb\DynamoDbClient;

$client = new DynamoDbClient([
    'profile' => 'default',
    'region'  => 'us-west-2',
    'version' => 'latest',
    'endpoint' => 'http://localhost:8000'
]);
$result = $client->describeTable(array(
    'TableName' => 'MusicCollection'
));

// The result of an operation can be used like an array


var_dump($result['Table']['AttributeDefinitions']);


?>