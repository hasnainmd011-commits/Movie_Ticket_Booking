<?php

include "includes/db.php";

$result = mysqli_query($conn, "SELECT * FROM movies");

?>
<!DOCTYPE html>

<html>
<head>
    <title>CIU Plex</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

```
<h1>CIU Plex</h1>

<nav>
    <a href="index.php">Home</a>
    <a href="booking.html">Book Ticket</a>
</nav>

<h2>Welcome to CIU plex</h2>

<p>Book your favourite movie tickets easily.</p>

<h2>Now Showing</h2>

<input type="text" id="search" placeholder="Search movies...">
<?php while ($movie = mysqli_fetch_assoc($result)) { ?>

    <div class="movie">

        <h3><?php echo $movie['title']; ?></h3>

        <p><?php echo $movie['genre']; ?></p>

        <p>
            Duration: <?php echo $movie['duration']; ?>
            |
            Rating: <?php echo $movie['rating']; ?>
        </p>

        <a href="booking.php?movie=<?php echo urlencode($movie['title']); ?>">
            Book Now
        </a>

    </div>

<?php } ?>



</body>
</html>
