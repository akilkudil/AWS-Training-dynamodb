<?php
require 'vendor/autoload.php';
use Aws\DynamoDb\DynamoDbClient;

$client = new DynamoDbClient([
    'profile' => 'default',
    'region'  => 'us-west-2',
    'version' => 'latest',
    'endpoint' => 'http://localhost:8000'
]);
$result = $client->listTables();

// TableNames contains an array of table names
foreach ($result['TableNames'] as $tableName) {
    echo $tableName . "\n";
}

?>