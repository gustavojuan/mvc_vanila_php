<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{

    protected $errors = [];

    public function validate($email, $password)
    {

        if (!Validator::email($email)) {
            $this->errors['email'] = 'Please provide a valid email addres';
        }

        if (!Validator::string($password, 7, 25)) {
            $this->errors['password'] = 'Please provide a  password of at least 7 chars.';
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }
}
