<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Session;
use Core\Validator;
use Http\Forms\LoginForm;

var_dump('I have benn Posted');

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    if ((new Authenticator)->attempt($email, $password)) {
        redirect('/');
    }
    $form->error('email', 'No matching account found for that email address and password');
}


Session::flash('errors', $form->errors());


return redirect('/login');


//
//return view('sessions/create.view.php', [
//        'errors' => $form->errors()
//    ]
//);


