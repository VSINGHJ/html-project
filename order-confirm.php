<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the page -->
    <title>Order Confirmed</title>
    <!-- Internal stylesheet -->
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: grey;
            margin: 0;
            padding: 0;
        }

        /* Styling for the header */
        header {
            background-color: whitesmoke;
            color: black;
            padding: 10px 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
        }

        /* Styling for the main section */
        section {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Styling for h1 text elements */
        h1 {
            color: black;
        }

        p {
            color: brown;
        }

        /* Styling for the confirmation message */
        .confirmation-message {
            font-size: 32px;
            font-weight: bold;
            color: green;
        }

        /* Styling for the navigation bar */
        nav ul {
            list-style: none;
            text-align: center;
            background-color: grey;
            padding: 19px 0;
            border-radius: 85px;
        }

        nav li {
            display: inline;
            margin: 0 15px;
            color: white;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-family: cursive;
            font-size: 17px;
        }
    </style>
</head>
<body>
    <!-- Main header section -->
    <header>
        <!-- Header content -->
        <h1>Home Of Transistor Radios </h1>
    </header>

    <!-- Navigation section -->
    <header>
        <!-- Navigation menu -->
        <nav>
            <!-- Navigation links -->
            <ul>
                <li><a href="#index">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="Promotional.php">Promotional Deals</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content section -->
    <section>
        <!-- Confirmation message -->
        <div class="confirmation-message">Thank you! Your order has been confirmed.</div>
        <!-- Order details -->
        <p>Your order details:</p>
        <p><strong>Order ID:</strong> #123456</p>
        <p><strong>Date:</strong> December 6, 2023</p>
        <p><strong>Total Amount:</strong> $100.00</p>

        <!-- PHP code to display additional order details -->
        <?php
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            echo('<p>Order Confirmed for: '.$fname.' '.$lname.'</p>');

            $type = $_POST['type'];
            echo('<p>You have ordered: '.$type.'</p>');
        ?>

        <p>For any inquiries, please contact our customer support.</p>
    </section>
</body>
</html>
