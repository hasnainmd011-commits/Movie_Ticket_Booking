<!DOCTYPE html>

<html>
<head>
    <title>Select Movie - MovieBook</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <h1>MovieBook</h1>

```
<nav>
    <a href="index.php">Home</a>
    <a href="select-movie.php">Book Ticket</a>
</nav>
```

</header>

<div class="container">

```
<h2>Select a Movie</h2>
<p>Choose a movie to continue booking.</p>

<div class="movies">

    <div class="movie-card">
        <img src="images/avatar.jpg" alt="Avatar">
        <h3>Avatar</h3>
        <p>Action • Sci-Fi</p>
        <a href="booking.php?movie=Avatar" class="btn">Select</a>
    </div>

    <div class="movie-card">
        <img src="images/deadpool.jpg" alt="Deadpool">
        <h3>Deadpool</h3>
        <p>Action • Comedy</p>
        <a href="booking.php?movie=Deadpool" class="btn">Select</a>
    </div>

    <div class="movie-card">
        <img src="images/moana2.jpg" alt="Moana 2">
        <h3>Moana 2</h3>
        <p>Animation • Adventure</p>
        <a href="booking.php?movie=Moana%202" class="btn">Select</a>
    </div>

    <div class="movie-card">
        <img src="images/mission.jpg" alt="Mission Impossible">
        <h3>Mission: Impossible</h3>
        <p>Action • Thriller</p>
        <a href="booking.php?movie=Mission%3A%20Impossible" class="btn">Select</a>
    </div>

</div>
```

</div>

</body>
</html>
