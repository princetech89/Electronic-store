<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: none;
    text-align: center;
    padding-top: 1px;
}

header {
    color: white;
    display: flex;
    align-items: center;
    background-color: none;
    padding: 20px;
    text-align: center;
    width: 100%;
}

.header-poster {
    width: 100%;
    height: auto;
    display: block;
}

.header-nav {
    position: absolute;
    bottom: 180px;
    width: 100%;
    background: none;
}

.header-nav ul {
    padding: 0;
    list-style: none;
    text-align: center;
}

.header-nav li {
    display: inline-flex;
    margin: 30px;
}

.header-nav a {
    color: white;
    text-decoration: bold;
    padding: 15px 15px;
    display: inline-flex;
    font-size: 20px;
    background-color: black;
}

.header-nav a:hover {
    background: rgba(109, 2, 2, 0.2);
    /* Light hover effect */
}

section {
    padding: 20px;
}

.product-section {
    padding: 20px;
    background-color: #f8f8f8;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: cloumn;
}

.product-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    animation: fadeIn 2s ease-in-out;
}

.product-item {
    background: white;
    border: 0px solid #ddd;
    border-radius: 6px;
    padding: 15px;
    width: 200px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.product-item img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.product-item:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

button {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

.add-to-cart {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.add-to-cart:hover {
    background-color: #0056b3;
}

.flash-deal-section {
    padding: 20px;
    background-color: #fff3e0;
    text-align: center;
}

.flash-deal-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.flash-deal-item {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    width: 250px;
    text-align: center;
    position: relative;
}

.flash-deal-images {
    position: relative;
    width: 100%;
    height: 150px;
    overflow: hidden;
}

.flash-deal-images img {
    width: 100%;
    height: auto;
    position: absolute;
    animation: slide 10s infinite;
}

@keyframes slide {
    0% {
        transform: translateX(0);
    }

    33% {
        transform: translateX(-100%);
    }

    66% {
        transform: translateX(-200%);
    }

    100% {
        transform: translateX(0);
    }
}

.deal-price {
    color: red;
    font-size: 18px;
}

.original-price {
    text-decoration: line-through;
    color: #888;
    margin-left: 10px;
}

.deal-timer {
    font-size: 18px;
    margin-top: 10px;
    color: #333;
}

#cart {
    border-top: 1px solid #ddd;
    padding-top: 20px;
}

#cart-items {
    list-style: none;
    padding: 1px;
}

#cart-items li {
    margin-bottom: 10px;
}

.cart-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
}

.reviews-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.review {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    margin: 10px;
    width: 80%;
    max-width: 600px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 1s forwards;
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.review h3 {
    margin: 0 0 10px;
}

.review p {
    margin: 0;
}

.visitor-count-container {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    display: inline-block;
}

h2 {
    margin: 0;
    font-size: 24px;
}

#visitor-count {
    font-size: 36px;
    font-weight: bold;
    color: #333;
    display: inline-block;
    animation: countUp 2s ease-in-out forwards;
}

/* Keyframes for count-up animation */
@keyframes countUp {
    from {
        transform: scale(1.2);
        opacity: 0;
    }

    to {
        transform: scale(1);
        opacity: 1;
    }
}

.hexagon {
    position: relative;
    width: 100px;
    height: 57.74px;
    background-color: #ddd;
    margin: 28.87px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.5s, box-shadow 0.5s;
    animation: rotateHexagon 10s linear infinite;
}

.hexagon::before,
.hexagon::after {
    content: '';
    position: absolute;
    width: 0;
    border-left: 50px solid transparent;
    /* Half of the hexagon width */
    border-right: 50px solid transparent;
    /* Half of the hexagon width */
}

.hexagon::before {
    bottom: 100%;
    border-bottom: 28.87px solid #ddd;
    /* Hexagon top */
}

.hexagon::after {
    top: 100%;
    border-top: 28.87px solid #ddd;
    /* Hexagon bottom */
}

.hexagon-inner {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    transition: transform 0.5s, filter 0.5s;
}

.hexagon img {
    width: 80%;
    /* Adjust size as needed */
    height: auto;
    display: block;
    transition: transform 0.5s, filter 0.5s;
}

/* Animation for the hexagon */
@keyframes rotateHexagon {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

/* Hover effects */
.hexagon:hover {
    transform: scale(1.1);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}

.hexagon-inner:hover img {
    transform: scale(1.1);
    filter: brightness(1.2);
}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", sans-serif;
        }

        body {
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
        }

        .container {
            background: #fff;
            width: 450px;
            padding: 1.5rem;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 20px 35px rgba(0, 0, 1, 0.9);
        }

        form {
            margin: 0 2rem;
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            padding: 1.3rem;
            margin-bottom: 0.4rem;
        }

        input {
            color: inherit;
            width: 100%;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #757575;
            padding-left: 1.5rem;
            font-size: 15px;
        }

        .input-group {
            padding: 1% 0;
            position: relative;

        }

        .input-group i {
            position: absolute;
            color: black;
        }

        input:focus {
            background-color: transparent;
            outline: transparent;
            border-bottom: 2px solid hsl(327, 90%, 28%);
        }

        input::placeholder {
            color: transparent;
        }

        label {
            color: #757575;
            position: relative;
            left: 1.2em;
            top: -1.3em;
            cursor: auto;
            transition: 0.3s ease all;
        }

        input:focus~label,
        input:not(:placeholder-shown)~label {
            top: -3em;
            color: hsl(327, 90%, 28%);
            font-size: 15px;
        }

        .recover {
            text-align: right;
            font-size: 1rem;
            margin-bottom: 1rem;

        }

        .recover a {
            text-decoration: none;
            color: rgb(125, 125, 235);
        }

        .recover a:hover {
            color: blue;
            text-decoration: underline;
        }

        .btn {
            font-size: 1.1rem;
            padding: 8px 0;
            border-radius: 5px;
            outline: none;
            border: none;
            width: 100%;
            background: rgb(125, 125, 235);
            color: white;
            cursor: pointer;
            transition: 0.9s;
        }

        .btn:hover {
            background: #07001f;
        }

        .or {
            font-size: 1.1rem;
            margin-top: 0.5rem;
            text-align: center;
        }

        .icons {
            text-align: center;
        }

        .icons i {
            color: rgb(125, 125, 235);
            padding: 0.8rem 1.5rem;
            border-radius: 10px;
            font-size: 1.5rem;
            cursor: pointer;
            border: 2px solid #dfe9f5;
            margin: 0 15px;
            transition: 1s;
        }

        .icons i:hover {
            background: #07001f;
            font-size: 1.6rem;
            border: 2px solid rgb(125, 125, 235);
        }

        .links {
            display: flex;
            justify-content: space-around;
            padding: 0 4rem;
            margin-top: 0.9rem;
            font-weight: bold;
        }

        button {
            color: rgb(125, 125, 235);
            border: none;
            background-color: transparent;
            font-size: 1rem;
            font-weight: bold;
        }

        button:hover {
            text-decoration: underline;
            color: blue;
        }
    </style>
</head>

<body>
    <div class="container" id="signup" style="display:none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fname">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script>
        const signUpButton = document.getElementById('signUpButton');
        const signInButton = document.getElementById('signInButton');
        const signInForm = document.getElementById('signIn');
        const signUpForm = document.getElementById('signup');

        signUpButton.addEventListener('click', function () {
            signInForm.style.display = "none";
            signUpForm.style.display = "block";
        })
        signInButton.addEventListener('click', function () {
            signInForm.style.display = "block";
            signUpForm.style.display = "none";
        })
        
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