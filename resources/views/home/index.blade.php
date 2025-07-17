<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Agrandir&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gradient-to-b from-violet-900 to-violet-500 h-screen text-gray-300 font-sans">

    <div class="w-full h-screen">
        
        <!-- nav bar -->
        <nav class="p-3">
            <div class="container mx-auto flex items-center justify-between">

                <!-- logo -->
                <div class="flex items-center space-x-4">
                    <img src="" alt="Logo" class="h-16 w-16">
                    <h1 class="text-3xl font-bold text-white">Ordering and Billing</h1>
                </div>

                <!-- Navigation bar -->
                <ul class="flex space-x-10 text-white font-bold text-lg">
                <li><a href="#" class="hover:text-violet-300">Home</a></li>
                <li><a href="#" class="hover:text-violet-300">Contact Us</a></li>
                <li><a href="#" class="hover:text-violet-300">About</a></li>
                <li><a href="#" class="hover:text-violet-300">Product Cart</a></li>
                <li><a href="#" class="hover:text-violet-300">Orders</a></li>
                <li><a href="#" class="hover:text-violet-300">Login</a></li>
                </ul>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="mt-52 backdrop-blur-lg p-10 rounded-lg flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-white mb-4">Welcome to Our Ordering & Billing System</h1>
                <p class="text-xl text-gray-200 mb-12">Browse products, manage your orders, and enjoy a seamless shopping experience.</p>
                <a href="#" class="font-bold bg-transparent border border-white text-white px-6 py-3 rounded-3xl hover:bg-white hover:text-violet-900 transition duration-300">Get Started</a>
            </div>
        </section>
    </div>

    <section>
        <h1>Welcome to Our Landing Page</h1>
        <p>Test Landing Page</p>
        <button onclick="alert('Test')">Click Me!</button>
    </section>

    <section>
        <h2>Featured Products</h2>
        <div class="">
            <h3>Special Deals</h3>
            <p>Description of Product 1</p>
            <button>Add to Cart</button>
        </div>
        <div class="">
            <h3>Recommended Products</h3>
            <p>Description of Product 2</p>
            <button>Add to Cart</button>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Ordering and billing</p>
        <p>Follow us on:
            <a href="#">Facebook</a>,
            <a href="#">Twitter</a>,
            <a href="#">Instagram</a>
        </p>
    </footer>    
</body>
</html>