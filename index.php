<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>

    <style>
        body {

            font-family: sans-serif;
        }
    </style>
</head>
<body>

<h1>Recommended Books</h1>

<?php
$books = [
    "Libro 1",
    "Libro 2",
    "Libro 3",
    "Libro 4"
];
?>

<ul>
    <?php
    foreach ($books as $book) {
        echo "<li>{$book}™</li>";
    }
    ?>
</ul>

<ul>
    <?php foreach ($books as $book) : ?>
        <li><?= $book ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>