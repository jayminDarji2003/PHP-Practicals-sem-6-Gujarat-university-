<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Message</title>
</head>
<body>
    <h2>Welcome!</h2>

    <?php
    // Check if form data was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize form data
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Display welcome message with the submitted email ID
        echo "<p>Welcome, $name!</p>";
        echo "<p>Your Email ID is: $email</p>";
    } else {
        // If form data was not sent via POST method, show an error message
        echo "<p>Form submission error.</p>";
    }
    ?>
</body>
</html>
