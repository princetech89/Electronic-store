<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * FROM `data` where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO web(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: homepage.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM signup WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY GAGATE STORE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
    <script src="script.js"></script>
</head>
<body>
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

    <footer>
        <p>&copy; 2024 My E-Commerce Store</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cart = [];
            const cartItems = document.getElementById('cart-items');
            const totalElement = document.getElementById('total');

            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', () => {
                    const productElement = button.parentElement;
                    const id = productElement.getAttribute('data-id');
                    const name = productElement.querySelector('h3').textContent;
                    const price = parseFloat(productElement.querySelector('p').textContent.replace('$', ''));

                    // Add product to cart
                    cart.push({ id, name, price });

                    // Update cart display
                    updateCart();
                });
            });

            function updateCart() {
                cartItems.innerHTML = ''; // Clear the current cart items
                let total = 0;

                cart.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = `${item.name} - $${item.price.toFixed(2)}`;
                    cartItems.appendChild(li);
                    total += item.price;
                });

                totalElement.textContent = `Total: $${total.toFixed(2)}`;
            }

            document.getElementById('checkout').addEventListener('click', () => {
                alert('Checkout is not implemented in this demo.');
            });
        });
        AOS.init();
        function startCountdown(elementId, endTime) {
            const timerElement = document.getElementById(elementId);

            function updateTimer() {
                const now = new Date();
                const timeRemaining = endTime - now;

                if (timeRemaining <= 0) {
                    timerElement.textContent = "EXPIRED";
                    clearInterval(interval);
                    return;
                }

                const hours = Math.floor((timeRemaining / (1000 * 60 * 60)) % 24);
                const minutes = Math.floor((timeRemaining / (1000 * 60)) % 60);
                const seconds = Math.floor((timeRemaining / 1000) % 60);

                timerElement.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            }

            const interval = setInterval(updateTimer, 1000);
        }

        // Set up a countdown timer for each Flash Deal item
        document.addEventListener('DOMContentLoaded', () => {
            const endTimes = {
                timer1: new Date(new Date().getTime() + 24 * 60 * 60 * 1000) // 24 hours from now
                // Add more timers for additional Flash Deals
            };

            for (const [id, endTime] of Object.entries(endTimes)) {
                startCountdown(id, endTime);
            }
        });

        function initMap() {
            var location = { lat: 37.7749, lng: -122.4194 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
        //-------------------------------//
        // script.js
        document.addEventListener("DOMContentLoaded", function () {
            const reviewsContainer = document.getElementById('reviews-container');

            // Example reviews data
            const reviews = [
                { name: "Alice", text: "Fantastic service and support!" },
                { name: "Bob", text: "Really enjoyed the product. Will buy again." },
                { name: "Charlie", text: "Good quality, but delivery was slow." }
            ];

            reviews.forEach((review, index) => {
                const reviewElement = document.createElement('div');
                reviewElement.className = 'review';
                reviewElement.style.animationDelay = `${index * 0.2}s`; // Stagger animations
                reviewElement.innerHTML = `<h3>${review.name}</h3><p>${review.text}</p>`;
                reviewsContainer.appendChild(reviewElement);
            });
        });

        //------------------------//
        // script.js
        document.addEventListener("DOMContentLoaded", function () {
            const visitorCountElement = document.getElementById('visitor-count');

            // Simulate fetching visitor count from local storage or server
            let visitorCount = parseInt(localStorage.getItem('visitorCount')) || 0;

            // Increment visitor count
            visitorCount++;
            localStorage.setItem('visitorCount', visitorCount);

            // Animate the visitor count
            animateVisitorCount(visitorCountElement, visitorCount);
        });

        function animateVisitorCount(element, count) {
            let current = 0;
            const increment = Math.ceil(count / 100); // Adjust increment to control animation speed

            function updateCount() {
                if (current < count) {
                    current += increment;
                    if (current > count) current = count; // Ensure count doesn't exceed the target
                    element.textContent = current;
                    requestAnimationFrame(updateCount);
                }
            }

            updateCount();
        }

        // script.js
        document.addEventListener('DOMContentLoaded', function () {
            const hexagon = document.querySelector('.hexagon');

            // Example: Adding a bounce effect on click
            hexagon.addEventListener('click', function () {
                hexagon.classList.add('bounce');

                setTimeout(() => {
                    hexagon.classList.remove('bounce');
                }, 500);  // Duration of click effect
            });
        });

    </script>

</body>

</html>