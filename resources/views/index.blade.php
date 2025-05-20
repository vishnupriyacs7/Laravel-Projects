<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoLearn-Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!-- <div class="container text-center text-white py-5">
        <div class="bg-dark p-4 rounded shadow-lg">
            <h1 class="display-4">Welcome to the Student Page</h1>
            <p class="lead">Manage student registrations and view the student list easily.</p>
            
            <div class="mt-4">
                <a href="/add" class="btn btn-primary btn-lg mx-2">Register a Student</a>
                <a href="/view" class="btn btn-success btn-lg mx-2">View Students</a>
            </div>
        </div>
    </div> -->
        <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Student Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/add">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/view">View Students</a>
                </li>
            </ul>
        </div>
    </nav> -->

    <!-- Main Content -->
    <!-- <div class="container text-center text-white py-5">
        <div class="bg-dark p-4 rounded shadow-lg">
            <h1 class="display-4">Welcome to the Student Page</h1>
            <p class="lead">Manage student registrations and view student information.</p>
            
            <div class="mt-4">
                <a href="/add" class="btn btn-primary btn-lg mx-2">Register a Student</a>
                <a href="/view" class="btn btn-success btn-lg mx-2">View Students</a>
            </div>
        </div>
    </div> -->

    <!-- Footer -->
    <!-- <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">© 2025 Student Portal. All rights reserved.</p>
    </footer> -->

     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">GoLearn</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/add">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section / Banner -->
    <header class="hero-section d-flex align-items-center justify-content-center text-center">
        <div class="text-white p-4">
            <h1 class="display-4">Welcome to the GoLearn</h1>
            <p class="lead">Easily register and view student details from one place.</p>
            <a href="/add" class="btn btn-primary btn-lg mx-2">Register a Student</a>
            <a href="/view" class="btn btn-success btn-lg mx-2">View Students</a>
        </div>
    </header>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-4 pb-2">
        <div class="container">
            <div class="row text-center text-md-left">

                <!-- Logo and Site Name -->
                <div class="col-md-4 mb-3">
                    <h5 class="mb-2"><img src="{{asset('images/logo.png')}}" alt="Logo" style="height: 40px;"> GoLearn</h5>
                    <p>Your gateway to student management.</p>
                </div>

                <!-- Address -->
                <div class="col-md-4 mb-3">
                    <h5>Contact Us</h5>
                    <p>123 Education Lane,<br>Calicut City, 45678<br>Email: info@golearn.com<br>Phone: +123-456-7890</p>
                </div>

                <!-- Social Media -->
                <div class="col-md-4 mb-3">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white mr-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-white mr-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white mr-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
                </div>
            </div>

            <hr class="bg-white">

            <div class="text-center">
                <p class="mb-0">&copy; 2025 Student Portal. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>