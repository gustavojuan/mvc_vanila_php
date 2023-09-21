<?php
require 'functions.php';
require 'Database.php';
//require 'router.php';

$config = require 'config.php';

$db = new Database($config['database']);

// Injection
// http://demo.test/?id=1 drop table users
$id = $_GET['id'];
//never pass user input to a query
$query =  "SELECT * FROM posts where id = :id";

$posts = $db->query($query,[':id' => $id])->fetch();
dd($posts);

