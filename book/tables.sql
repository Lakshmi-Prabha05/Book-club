
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    description TEXT,
    cover_image VARCHAR(255) -- Optional for storing image paths
);

-- Insert sample data
INSERT INTO books (title, author, description, cover_image) VALUES
('To Kill a Mockingbird', 'Harper Lee', 'A novel about racism and injustice.', 'b1.ng'),
('1984', 'George Orwell', 'A dystopian social science fiction novel.', 'cover2.jpg'),
('Pride and Prejudice', 'Jane Austen', 'A romantic novel of manners.', 'cover3.jpg');

CREATE TABLE reviews (
    review_id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT NOT NULL,
    user_id INT NOT NULL,
    review TEXT,
    FOREIGN KEY (book_id) REFERENCES books(book_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
