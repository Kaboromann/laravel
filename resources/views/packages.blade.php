<!DOCTYPE html>
<html>
<head>
    <title>Travel Packages</title>
    <style>
        body {
            text-align: center;
            background-image: url("images/kichwa3.jpg"); 
            background-size: cover;
            background-position: center;
        }

        .packages-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
        }

        .package {
            flex-basis: 30%;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
            cursor: pointer;
            background-color: #ffc107;
        }

        .package:hover {
            transform: scale(1.05);
        }

        .package h2 {
            margin-top: 0;
        }
        .package p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Travel Packages</h1>

    <div class="packages-container">
        <div class="package">
            <h2>Standard Package</h2>
            <p>Destination: Watamu, Malindi</p>
            <p>Duration: 7 days</p>
            <p>Price: 15,000</p>
            <p>Description: get to snorkell as you visit the one and only marine park in Watamu</p>
            <a href="/bookings">Book Now</a>
        </div>

        <div class="package">
            <h2>Premium Package</h2>
            <p>Destination: Maasai Mara, Narok</p>
            <p>Duration: 10 days</p>
            <p>Price: 20,000</p>
            <p>Description: Get to see one of the seven wonders of the world in action.</p>
            <a href="/bookings">Book Now</a>
        </div>

        <div class="package">
            <h2>Platinum Package</h2>
            <p>Destination: Mount Kenya, Meru</p>
            <p>Duration: 14 days</p>
            <p>Price: 30,000</p>
            <p>Description: Enjoy a one of a kind experience in mount kenya.</p>
            <a href="/bookings">Book Now</a>
        </div>
        <div class="package">
            <h2>Gold Package</h2>
            <p>Destination: Diani, Kwale </p>
            <p>Duration: 30 days</p>
            <p>Price: 50,000</p>
            <p>Description: Enjoy a cool breeze while basking on the white beaches in Diani.</p>
            <a href="/bookings">Book Now</a>
        </div>
    </div>
</body>
</html>
