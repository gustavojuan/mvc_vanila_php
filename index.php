<?php
require 'functions.php';
require 'Database.php';
//require 'router.php';


// Connect to DB and execure a query
$db = new Database();
$posts = $db->query("SELECT * FROM posts where id > 0")->fetchAll(PDO::FETCH_ASSOC);
dd($posts);
$posts = $db->query("SELECT * FROM posts where id > 0")->fetch(PDO::FETCH_ASSOC);
dd($posts);
