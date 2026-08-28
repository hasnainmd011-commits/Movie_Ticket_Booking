CREATE DATABASE movie_booking;

USE movie_booking;

CREATE TABLE movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    genre VARCHAR(100),
    duration VARCHAR(50),
    rating DECIMAL(2,1)
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    movie VARCHAR(100),
    booking_date DATE,
    show_time VARCHAR(30),
    seats VARCHAR(100),
    total_price INT
);

INSERT INTO movies (title, genre, duration, rating) VALUES
('Avatar', 'Action • Sci-Fi', '2h 42m', 8.5),
('Deadpool', 'Action • Comedy', '2h 8m', 8.3),
('Moana 2', 'Animation • Adventure', '1h 40m', 8.1),
('Mission: Impossible', 'Action • Thriller', '2h 49m', 8.0);