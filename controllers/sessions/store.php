<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

// Validate the form inputs
$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email addres';
}

if (!Validator::string($password, 7, 25)) {
    $errors['password'] = 'Please provide a  password of at least 7 chars.';
}

if (!empty($errors)) {
    view('sessions/create.view.php', [
            'errors' => $errors
        ]
    );
}


// Check if the user exists

$db = App::resolve(Database::class);
$user = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email
])->find();

$errors = [];


// If yes, redirect to login page
if ($user) {
    if (password_verify($password, $user['password'])) {
        login($user);

        header('location: /');
        exit();
    }
}
return view('sessions/create.view.php',
    [
        'errors' => [
            'email' => 'No matching account found for that email address and password'
        ]
    ]);