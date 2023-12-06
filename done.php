<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to an external stylesheet (style.css) -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <!-- Header section -->
    <header>
        <!-- This statement below includes the header of the web page. -->
        <h1>Home Of Transistor Radios </h1>
    </header>

    <!-- Navigation section -->
    <header>
        <!-- Navigation menu -->
        <nav>
            <!-- Navigation links -->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="Promotional.php">Promotional Deals</a></li>
            </ul>
        </nav>
    </header>

    <!-- Form section -->
    <div class="done">
        <form action="order-confirm.php" method="POST">
            <center>
                <h3>Personal Details</h3>
                <table>
                    <!-- Personal details input fields -->
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="fname" id="fname" required></td>
                    </tr>
                    <tr>
                        <td>Middle Name</td>
                        <td><input type="text" name="name" id="name"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="lname" id="lname" required></td>
                    </tr>
                    <!-- Address input fields -->
                    <tr>
                        <td><h4>Residential / Billing Address</h4></td>
                    </tr>
                    <tr>
                        <td>House / Apartment No.</td>
                        <td><input type="text" name="house" required></td>
                    </tr>
                    <tr>
                        <td>Street Name:</td>
                        <td><input type="text" name="street" required></td>
                    </tr>
                    <tr>
                        <td>City / Town Name:</td>
                        <td><input type="text" name="city" required></td>
                    </tr>
                    <tr>
                        <td>Province:</td>
                        <td><input type="text" name="province" required></td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td>
                            <select name="" id="">
                                <!-- Country options -->
                                <option value="" selected="selected" disabled="disabled">Select</option>
                                <option value="">India</option>
                                <option value="">Canada</option>
                                <option value="">Australia</option>
                                <option value="">USA</option>
                                <option value="">Egypt</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Mobile Number</td>
                        <td><input type="number" name="number" required></td>
                    </tr>
                    <tr>
                        <td>Email Id</td>
                        <td><input type="email" name="email" required></td>
                    </tr>
                </table><br><br>

                <h3>Product & Purchasing Mode Details</h3>
                <!-- Product and purchasing details input fields -->
                <table>
                    <tr>
                        <td>Choose the Radio-type:</td>
                        <td>
                            <select name="type" id="type">
                                <!-- Radio type options -->
                                <option value="TR-1 Regency Radio"> TR-1 Regency</option>
                                <option value="Foxhole">Foxhole Radio</option>
                                <option value="Bakelite Radio">Bakelite Radio</option>
                                <option value="Transistor Radio">Transistor Radio</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Radio's Condition:</td>
                        <!-- Radio condition options -->
                        <td><input type="radio" name="condition">Fair</td>
                        <td><input type="radio" name="condition">Good</td>
                        <td><input type="radio" name="condition">Excellent</td>
                        <td><input type="radio" name="condition">Like New</td>
                    </tr>
                    <tr>
                        <td>Mode of Payment:</td>
                        <!-- Payment mode options -->
                        <td><label><input type="radio" name="payment" id="credit"> Credit Card</label> </td>
                        <td><label><input type="radio" name="payment" id="banking"> Online Banking</label> </td>
                        <td><label><input type="radio" name="payment" id="cash"> Cash on delivery </label></td>
                    </tr>
                </table><br><br>

                <h3>Terms & Conditions</h3>
                <!-- Terms and conditions -->
                <table>
                    <tr>
                        <td>Please read these terms and conditions carefully before using our website. By using the Vintage Radio E-Commerce Website (referred to as "we," "our," or "us"), you agree to comply with and be bound by the following terms and conditions. If you do not agree to these terms and conditions, please do not use this website.</td>
                    </tr>
                    <tr>
                        <td><h4>Acceptance of Terms:</h4> By accessing or using the Vintage Radio E-Commerce Website, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions. These terms and conditions may be updated or modified from time to time, and your continued use of the website after any such changes indicates your acceptance of the updated terms.</td>
                    </tr>
                    <tr>
                        <td><h4>Product Descriptions:</h4> We make every effort to ensure that product descriptions, including condition, history, and pricing, are accurate and up-to-date. However, we cannot guarantee the accuracy of all information. We encourage you to contact us with any questions or concerns about a product before making a purchase.</td>
                    </tr>
                    <tr>
                        <td><h4>Shipping and Returns:</h4> Please review our shipping and returns policy for information on delivery times, shipping costs, and the return process for products purchased from our website.</td>
                    </tr>
                    <tr>
                        <td><h4>Limitation of Liability:</h4> In no event shall we be liable for any direct, indirect, special, incidental, or consequential damages, including but not limited to, loss of data or profits, arising out of the use or inability to use this website.</td>
                    </tr>
                    <tr>
                        <td><h4>Links to Third-Party Websites:</h4> This website may contain links to third-party websites. We are not responsible for the content or practices of these websites and do not endorse or guarantee their products or services. Your use of third-party websites is at your own risk.</td>
                    </tr>
                </table>
                <!-- Checkbox for acknowledgment -->
                <table>
                    <tr>
                        <td><input type="checkbox" name="acknowledge">I Accept</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="acknowledge">I do not Accept</td>
                    </tr>
                </table>
                <!-- Submit and reset buttons -->
                <table>
                    <tr>
                        <td><input type="submit" value="Place Order"></td>
                        <td><input type="reset" value="Reset Form"></td>
                    </tr>
                </table>
            </center>
        </form>
    </div>
</body>

</html>
