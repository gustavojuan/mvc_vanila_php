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
        "name" => "Dune",
        "author" => "Frank Herbert",
        "releaseYear" => 1965,
        "purchaseUrl" => "https://example.com/dune"
    ],
    [
        "name" => "Neuromancer",
        "author" => "William Gibson",
        "releaseYear" => 1984,
        "purchaseUrl" => "https://example.com/neuromancer"
    ],
    [
        "name" => "Foundation",
        "author" => "Isaac Asimov",
        "releaseYear" => 1951,
        "purchaseUrl" => "https://example.com/foundation"
    ],
    [
        "name" => "The Hitchhiker's Guide to the Galaxy",
        "author" => "Douglas Adams",
        "releaseYear" => 1979,
        "purchaseUrl" => "https://example.com/hitchhikers-guide"
    ],
    [
        "name" => "1984",
        "author" => "George Orwell",
        "releaseYear" => 1949,
        "purchaseUrl" => "https://example.com/1984"
    ],
    [
        "name" => "Brave New World",
        "author" => "Aldous Huxley",
        "releaseYear" => 1932,
        "purchaseUrl" => "https://example.com/brave-new-world"
    ],
    [
        "name" => "Snow Crash",
        "author" => "Neal Stephenson",
        "releaseYear" => 1992,
        "purchaseUrl" => "https://example.com/snow-crash"
    ],
    [
        "name" => "The Martian",
        "author" => "Andy Weir",
        "releaseYear" => 2011,
        "purchaseUrl" => "https://example.com/the-martian"
    ],
    [
        "name" => "Altered Carbon",
        "author" => "Richard K. Morgan",
        "releaseYear" => 2002,
        "purchaseUrl" => "https://example.com/altered-carbon"
    ],
    [
        "name" => "Hyperion",
        "author" => "Dan Simmons",
        "releaseYear" => 1989,
        "purchaseUrl" => "https://example.com/hyperion"
    ],
    [
        "name" => "The Left Hand of Darkness",
        "author" => "Ursula K. Le Guin",
        "releaseYear" => 1969,
        "purchaseUrl" => "https://example.com/left-hand-of-darkness"
    ],
    [
        "name" => "Ender's Game",
        "author" => "Orson Scott Card",
        "releaseYear" => 1985,
        "purchaseUrl" => "https://example.com/enders-game"
    ],
];

function filterByAuthor($books, $author)
{

    $filteredBooks = [];


    foreach ($books as $book) {
        if ($book['author'] === $author) {
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}


?>


<ul>
    <?php foreach ($books as $book): ?>
        <?php if ($book['author'] === "Andy Weir"): ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name'] . " - " . $book['releaseYear'] ?> by <?= $book['author'] ?>
                </a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>


<ul>
    <?php foreach (filterByAuthor($books, 'Ursula K. Le Guin') as $book): ?>

        <li>
            <a href="<?= $book['purchaseUrl']; ?>">
                <?= $book['name'] . " - " . $book['releaseYear'] ?> by <?= $book['author'] ?>
            </a>
        </li>

    <?php endforeach; ?>
</ul>


</body>
</html>