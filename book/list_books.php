<?php
// Start the session to check if the user is logged in
session_start();

if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// Sample book data with Book Club website links
$books = [
    [
        'title' => 'Mystery',
        'image' => 'images/the1.png',
        'link' => 'https://www.theschoolrun.com/best-books-kids-who-love-mysteries'
    ],
    [
        'title' => 'Fantasy',
        'author' => 'Harper Lee',
        'image' => 'images/the2.png',
        'link' => 'https://www.esquire.com/entertainment/books/g39385874/best-fantasy-books/'
    ],
    [
        'title' => 'Literay Fiction',
        'author' => 'F. Scott Fitzgerald',
        'image' => 'images/the3.png',
        'link' => 'https://www.penguinrandomhouse.com/the-read-down/literary-fiction/'
    ],
    [
        'title' => 'Graphic Novel',
        'image' => 'images/the6.png',
        'link' => 'https://www.nytimes.com/2020/02/28/books/graphic-novels-your-kid-probably-hasnt-read-yet.html'
    ],
    [
        'title' => 'History',
        'image' => 'images/the7.png',
        'link' => 'https://www.discovermagazine.com/the-sciences/25-greatest-science-books-of-all-time'
    ],
    [
        'title' => 'Poetry',
        'image' => 'images/the8.png',
        'link' => 'https://becomingunbusy.com/poetry-books-for-resetting-your-life/'
    ],
    [
        'title' => 'Memoir',
        'image' => 'images/the9.png',
        'link' => 'https://observer.com/2024/04/sober-curious-memoir-roundup-best-sober-books/'
    ],
    [
        'title' => 'Thriller',
        'author' => 'F. Scott Fitzgerald',
        'image' => 'images/the5.png',
        'link' => 'https://everyday-reading.com/15-best-thriller-books/'
    ],
    [
        'title' => 'Science Fiction',
        'author' => 'F. Scott Fitzgerald',
        'image' => 'images/the4.png',
        'link' => 'https://www.edutopia.org/article/sci-fi-books-make-sense-of-modern-world/'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: pink; /* Light gray background color */
            margin: 0;
            padding: 0;
        }
        .book-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .book-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
        .book-card img {
            border-radius: 8px;
        }
        .book-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 10px;
        }
        .book-author {
            font-size: 1rem;
            color: #666;
        }
        .book-link {
            color: #007bff;
            text-decoration: none;
        }
        .book-link:hover {
            text-decoration: underline;
        }
    </style>
    <title>Browse Books</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Browse Books</h1>
        <div class="row">
            <?php foreach ($books as $book): ?>
                <div class="col-md-4">
                    <div class="book-card">
                        <img src="<?= $book['image']; ?>" alt="<?= $book['title']; ?>" class="img-fluid">
                        <div class="book-title"><?= $book['title']; ?></div>
                        <a href="<?= $book['link']; ?>" class="book-link" target="_blank">Read More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
