<?php
// Start the session to check if the user is logged in
session_start();

if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}
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
    line-height: 1.6;
    background-color:pink;
}

.hero-section {
    background-image: url('images/book0.png');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    text-align: center;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.5);
}

.hero-section h1 {
    font-size: 3.5rem;
    margin-bottom: 20px;
    font-weight: bold;
    letter-spacing: 2px;
}

.hero-section .btn {
    background-color: #ff80aa;
    color: white;
    border-radius: 30px;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.hero-section .btn:hover {
    transform: scale(1.1);
    background-color: #ff4d94;
}

.section-title {
    margin-bottom: 30px;
    font-size: 2rem;
    font-weight: bold;
    color: #ff80aa;
    text-transform: uppercase;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
}

.section-title::after {
    content: '';
    width: 50px;
    height: 4px;
    background-color: #ff80aa;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 2px;
}

.about-section {
    background-color: #f9f9f9;
    padding: 60px 0;
    border-left: 5px solid #ff80aa;
}

.about-section img {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-section {
    background-color: #f1f1f1;
    padding: 60px 0;
    border-left: 5px solid #ff4d94;
}

.contact-section form .btn-primary {
    background-color: #ff80aa;
    border: none;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.contact-section form .btn-primary:hover {
    background-color: #ff4d94;
    transform: scale(1.05);
}

.col-md-4 img {
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.col-md-4 img:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
    border-top: 4px solid #ff80aa;
}

.footer a {
    color: #ff80aa;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer a:hover {
    color: #ff4d94;
}


    </style>
    <title>Book Club</title>
</head>
<body>
    <div class="container-fluid hero-section">
        <div class="container">
            <h1 class="display-4">Welcome to the Book Club</h1>
            <p class="lead">Explore books, discover new authors, and join our community!</p>
            <a href="list_books.php" class="btn btn-light btn-lg" style="bgcolor: pink";>Browse Books</a>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="section-title text-center">About Us</h2>
        <div class="row about-section">
            <div class="col-md-6">
                <h3>Our Mission</h3>
                <p style="font:italic";>The Book Club is a community for book lovers who enjoy reading and discussing their favorite books. We aim to foster a space where people can come together to share ideas, insights, and recommendations.</p>
            </div>
            <div class="col-md-6">
                <img src="images/book2.png" alt="Books" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h2 class="section-title text-center">Gallery</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="https://www.esquire.com/entertainment/books/g60078949/best-sci-fi-books-2024/"><img src="images/club2.png" alt="Gallery Image 1" class="img-fluid"></a><br>
                <strong>Fiction Books</strong>
            </div>
            <div class="col-md-4">
    <a href="https://www.indiamart.com/proddetail/educational-book-printing-services-11875237162.html">
        <img src="images/club1.png" alt="Gallery Image 2" class="img-fluid">
    </a><br>
    <strong>Educational Books</strong>
</div>

            <div class="col-md-4">
                <a href="https://www.amazon.in/Children-Story-Books/s?k=Children+Story+Books"><img src="images/book4.png" alt="Gallery Image 3" class="img-fluid"></a><br>
                <strong>Story Books</storng>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="section-title text-center">Contact Us</h2>
        <div class="row contact-section">
            <div class="col-md-6">
                <h3>Get in Touch</h3>
                <p>If you have any questions or would like to know more, feel free to reach out to us!</p>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Write your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Our Location</h3>
                <p>123 Book Street, Literature City, Country</p>
                <img src="images/loc.png" alt="Location" class="img-fluid">
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Book Club | <a href="logout.php">Logout</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
