<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$heading = "My Notes";
$notes = $db->query('SELECT * FROM notes', [])->fetchAll();


view('notes/index.view.php',
    [
        'heading' => $heading,
        'notes'=> $notes
    ]
);