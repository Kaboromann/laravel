<!DOCTYPE html>
<html>
<head>
    <title>Bookings</title>
    <style>
        body {
            text-align: center;
            background-image: url("images/kichwa3.jpg"); 
            background-size: cover;
            background-position: center;
        }

        .booking-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .booking-form label {
            display: block;
            margin-bottom: 10px;
        }

        .booking-form input[type="text"],
        .booking-form input[type="email"],
        .booking-form select {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .booking-form button {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #ffc107;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Bookings</h1>

    <div class="booking-form">
        <form>
            <label for="package">Select Package:</label>
            <select id="package" name="package">
                <option value="standard">Standard Package</option>
                <option value="premium">Premium Package</option>
                <option value="platinum">Platinum Package</option>
            </select>

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
