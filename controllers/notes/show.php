<?php

use Core\Database;
use Core\Response;

$config = require base_path('config.php');
$db = new Database($config['database']);

$heading = "Note";
$currentUserId = 1;

$note = $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_GET['id']
])->fetch();

if (!$note) {
    abort();
}
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}


view('notes/show.view.php',
    [
        'heading' => $heading,
        'note' => $note
    ]
);