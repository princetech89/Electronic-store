<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
      <header>
        <div class="hexagon">
            <div class="hexagon-inner">
                <img src="head.jpg" alt="Logo">
            </div>
        </div>
    </header>
    <header>
        <img src="https://t4.ftcdn.net/jpg/02/83/65/67/360_F_283656749_JTbkIfYA5qHvxEywwiPON9IZe5iough4.jpg"
            alt="Poster" class="header-poster">
        <nav class="header-nav">
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#Hot deals">Hot deals</a></li>
                <li><a href="#Laptop">Laptop</a></li>
                <li><a href="#Smartphone">Smartphone</a></li>
                <li><a href="#cart">Cart</a></li>
            </ul>
        </nav>
    </header>

    <section id="Laptop" class="product-section">
        <div class="product-container">
            <div class="product-item">
                <img src="path/to/product1.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="path/to/product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="path/to/product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="path/to/product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="path/to/product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </section>

    <section id="Smartphone" class="product-section">
        <div class="product-container">
            <div class="product-item">
                <img src="path/to/product1.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="path/to/product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="path/to/product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="path/to/product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="path/to/product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <!-- Add more product items as needed -->
        </div>
    </section>

    <section class="flash-deal-section">
        <h2>Flash Deal!</h2>
        <div class="flash-deal-container">
            <div class="flash-deal-item">
                <div class="flash-deal-images">
                    <img src="path/to/deal1.jpg" alt="Deal 1">
                    <img src="path/to/deal2.jpg" alt="Deal 2">
                    <img src="path/to/deal3.jpg" alt="Deal 3">
                </div>
                <h3>Deal 1</h3>
                <p><span class="deal-price">$9.99</span> <span class="original-price">$19.99</span></p>
                <button class="add-to-cart">Add to Cart</button>
                <div class="deal-timer" id="timer1">00:00:00</div>
            </div>
            <!-- Add more flash deal items as needed -->
        </div>
        <h2>Flash Deal!</h2>
        <div class="flash-deal-container">
            <div class="flash-deal-item">
                <div class="flash-deal-images">
                    <img src="path/to/deal1.jpg" alt="Deal 1">
                    <img src="path/to/deal2.jpg" alt="Deal 2">
                    <img src="path/to/deal3.jpg" alt="Deal 3">
                </div>
                <h3>Deal 1</h3>
                <p><span class="deal-price">$9.99</span> <span class="original-price">$19.99</span></p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <!-- Add more flash deal items as needed -->
        </div>

    </section>
    <div class="reviews-container" id="reviews-container"></div>
    <section id="cart">
        <div class="cart-container">
            <h2>Shopping Cart</h2>
            <ul id="cart-items"></ul>
            <p id="total">Total: $0.00</p>
            <button id="checkout">Checkout</button>
        </div>

    </section>
    <section id="map">
        <h2>Find Us Here</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15216.139793639528!2d78.44108889999998!3d17.553522700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1725176839351!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="fast"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <div class="visitor-count-container">
        <h2>Visitor Count: <span id="visitor-count">0</span></h2>
    </div>
 <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT * FROM `data` WHERE signup.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>