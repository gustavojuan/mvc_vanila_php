<?php

use Core\Database;
use Core\Response;

$config = require base_path('config.php');
$db = new Database($config['database']);


$heading = "Note";
$currentUserId = 1;

$note = $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('delete from notes where id= :id', [
    'id' => $_POST['id']
]);

header('Location: /notes');
exit();