<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];



$form = new LoginForm();


if (!$form->validate($email, $password)) {
    dd($form->errors());
    return view('sessions/create.view.php', [
            'errors' => $form->errors()
        ]
    );

}


// Check if the user exists

$db = App::resolve(Database::class);
$user = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email
])->find();


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
