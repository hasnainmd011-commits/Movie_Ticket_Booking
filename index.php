<?php require_once 'includes/db.php';
$movies = $conn->query("SELECT * FROM movies"); ?><!DOCTYPE html>
<html>

<head>
    <title>MovieBook</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <h2>🎬 CIU Plex</h2>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="booking.php">Book Ticket</a></li>
        </ul>
    </nav>
    <section class="hero">
        <div>
            <h1>Welcome to CIU Plex</h1>
            <p>Simple, fast and easy movie ticket booking.</p><a class="btn" href="#movies">View Movies</a>
        </div>
    </section>
    <section class="movies" id="movies">
        <h2>Now Showing</h2>
        <div class="movie-container"><?php while ($m = $movies->fetch_assoc()) { ?>
                <div class="card"><img src="images/<?php echo $m['poster']; ?>">
                    <h3><?php echo $m['title']; ?></h3>
                    <p><?php echo $m['genre']; ?> Rating : <?php echo $m['rating']; ?></p><a class="btn"
                        href="booking.php?movie=<?php echo $m['id']; ?>">Book</a>
                </div><?php } ?>
        </div>
    </section>
    <footer>© 2026 CIU Plex</footer>
</body>

</html>