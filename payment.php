<!DOCTYPE html>

<html>
<head>
    <title>Payment - MovieBook</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

```
<h1>MovieBook</h1>

<nav>
    <a href="index.php">Home</a>
    <a href="booking.php">Book Ticket</a>
</nav>

<h2>Payment</h2>

<p>Please select your payment method.</p>

<form action="success.php" method="GET">

    <label>
        <input type="radio" name="payment" value="Card" required>
        Card
    </label>

    <br><br>

    <label>
        <input type="radio" name="payment" value="Mobile Banking">
        Mobile Banking
    </label>

    <br><br>

    <label>
        <input type="radio" name="payment" value="Cash">
        Cash at Counter
    </label>

    <br><br>

    <button type="submit">Confirm Payment</button>

</form>
```

</body>
</html>