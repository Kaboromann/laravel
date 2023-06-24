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
            <p>Destination: Paris, France</p>
            <p>Duration: 7 days</p>
            <p>Price: $1000</p>
            <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="/bookings">Book Now</a>
        </div>

        <div class="package">
            <h2>Premium Package</h2>
            <p>Destination: Tokyo, Japan</p>
            <p>Duration: 10 days</p>
            <p>Price: $2000</p>
            <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="/bookings">Book Now</a>
        </div>

        <div class="package">
            <h2>Platinum Package</h2>
            <p>Destination: Maldives</p>
            <p>Duration: 14 days</p>
            <p>Price: $5000</p>
            <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="/bookings">Book Now</a>
        </div>
    </div>
</body>
</html>
