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
    [
        "name" => "Libro 1",
        "author" => "Author 1",
        "purchaseUrl" => "Url 1"
    ],
    [
        "name" => "Libro 2",
        "author" => "Author 2",
        "purchaseUrl" => "Url 2"
    ],
];
?>


<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <a href="<?= $book['purchaseUrl']; ?>">
                <?= $book['name'] . " - " . $book['author'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>