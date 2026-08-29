<!DOCTYPE html>

<html>
<head>
    <title>Booking Successful - MovieBook</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

```
<h1>MovieBook</h1>

<h2>Booking Successful!</h2>

<p>Your movie ticket has been booked successfully.</p>

<div>
    <h3>Booking Confirmation</h3>

    <p>Thank you for booking with MovieBook.</p>

    <p>Payment Method: <?php echo $_GET['payment'] ?? 'Not selected'; ?></p>

    <p>Please keep this page for your reference.</p>
</div>

<a href="index.php">Back to Home</a>
```

</body>
</html>
