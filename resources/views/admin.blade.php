<!DOCTYPE html>
<html>
<head>
    <title>Admin Bookings</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Admin Bookings</h1>

    <?php
     //Retrieve form data
    $package = $_POST['package'];
   $name = $_POST['name'];
    $email = $_POST['email'];

    // Save form data to a file or database
    // Example: saving to a text file
    $data = "Package: $package\nName: $name\nEmail: $email\n\n";
    file_put_contents('bookings.txt', $data, FILE_APPEND);

    // Display success message
    echo "<p>Booking submitted successfully!</p>";
    ?>

    <h2>Existing Bookings:</h2>
    <div>
        <?php
        // Display existing bookings
        $bookings = file_get_contents('bookings.txt');
        echo nl2br($bookings);
        ?>
    </div>
</body>
</html>
