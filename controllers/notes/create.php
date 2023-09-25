<?php

$heading = "Create Note";

$errors = [];


view('notes/create.view.php',
    [
        'heading' => $heading,
        'errors' => $errors
    ]
);