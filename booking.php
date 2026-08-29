
<?php $movie = $_GET['movie'] ?? ''; ?>

include "includes/db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $movie = $_POST['movie'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $seats = "Not selected";
    $total = 0;

    $sql = "INSERT INTO bookings
            (name, email, movie, booking_date, show_time, seats, total_price)
            VALUES
            ('$name', '$email', '$movie', '$date', '$time', '$seats', '$total')";

    mysqli_query($conn, $sql);

    header("Location: payment.php");
    exit();
}

?>

<!DOCTYPE html>

<html>

<head>
    <title>Book Ticket - MovieBook</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>MovieBook</h1>

<nav>
    <a href="index.php">Home</a>
    <a href="booking.php">Book Ticket</a>
</nav>

<h2>Book Your Ticket</h2>

<form method="POST">

```
<label>Name</label><br>
<input type="text" name="name" required><br><br>

<label>Email</label><br>
<input type="email" name="email" required><br><br>

<label>Select Movie</label><br>
<select name="movie">
    <option>Avatar</option>
    <option>Deadpool</option>
    <option>Moana 2</option>
    <option>Mission: Impossible</option>
</select><br><br>

<label>Select Date</label><br>
<input type="date" name="date" required><br><br>

<label>Show Time</label><br>
<select name="time">
    <option>10:00 AM</option>
    <option>1:00 PM</option>
    <option>4:00 PM</option>
    <option>7:00 PM</option>
</select><br><br>

<h3>Select Your Seats</h3>

<p class="screen">SCREEN</p>

<div class="seats">

    <button type="button">A1</button>
    <button type="button">A2</button>
    <button type="button">A3</button>
    <button type="button">A4</button>
    <button type="button">A5</button>
    <button type="button">A6</button>

    <button type="button">B1</button>
    <button type="button">B2</button>
    <button type="button">B3</button>
    <button type="button">B4</button>
    <button type="button">B5</button>
    <button type="button">B6</button>

    <button type="button">C1</button>
    <button type="button">C2</button>
    <button type="button">C3</button>
    <button type="button">C4</button>
    <button type="button">C5</button>
    <button type="button">C6</button>

</div>

<p class="selected-seats">Selected seats: None</p>

<p class="total-price">Total Price: Tk 0</p>

<button type="submit" name="submit">Continue</button>
```

</form>

<script src="js/script.js"></script>

</body>
</html>
