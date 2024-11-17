<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Image/ikan.png">
    <title>Tiket Busking.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/style6.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amiri&family=Cherry+Bomb+One&family=Creepster&family=Outfit:wght@100..900&family=Poppins&family=Updock&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light py-1 bg-nav shadow-sm fixed-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="">
                <img src="../image/logo-buss.png" alt="Buss Lightyear" width="42" height="42"
                    class="d-inline-block mt--2 me-2" />
                <span class="text-body fs-4 fw-bolder">Busking</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse py-3 py-lg-1" id="navbarSupportedContent">
                <!-- Menu -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="beranda.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="jadwal&rute.php">Jadwal & Rute</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="tiket.php">Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="tiket_saya.php">Tiket Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- tiket section-->
    <section class="container mt-5 pt-5">
        <h2 class="text-center mb-5 pt-1 fw-bold">Tiket yang tersedia</h2>
        <div class="row">
            <!-- Ticket Card -->
            <div class="col-md-4">
                <div class="card mb-5">
                    <img src="../image/buss-exe.jpg" alt="Bus Image">
                    <div class="card-body">
                        <h5 class="card-title">City A - City B</h5>
                        <p class="card-text">Bus: Luxury Bus</p>
                        <p class="card-text">Seats Available: 30</p>
                        <p class="card-text">Departure: 08:00 AM</p>
                        <p class="card-text">Price: $20</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../image/buss-exe.jpg" alt="Bus Image">
                    <div class="card-body">
                        <h5 class="card-title">City C - City D</h5>
                        <p class="card-text">Bus: Economy Bus</p>
                        <p class="card-text">Seats Available: 40</p>
                        <p class="card-text">Departure: 10:00 AM</p>
                        <p class="card-text">Price: $15</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../image/buss-exe.jpg" alt="Bus Image">
                    <div class="card-body">
                        <h5 class="card-title">City E - City F</h5>
                        <p class="card-text">Bus: Express Bus</p>
                        <p class="card-text">Seats Available: 25</p>
                        <p class="card-text">Departure: 12:00 PM</p>
                        <p class="card-text">Price: $25</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../image/buss-exe.jpg" alt="Bus Image">
                    <div class="card-body">
                        <h5 class="card-title">City G - City H</h5>
                        <p class="card-text">Bus: Standard Bus</p>
                        <p class="card-text">Seats Available: 35</p>
                        <p class="card-text">Departure: 02:00 PM</p>
                        <p class="card-text">Price: $18</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../image/buss-exe.jpg" alt="Bus Image">
                    <div class="card-body">
                        <h5 class="card-title">City I - City J</h5>
                        <p class="card-text">Bus: Comfort Bus</p>
                        <p class="card-text">Seats Available: 20</p>
                        <p class="card-text">Departure: 04:00 PM</p>
                        <p class="card-text">Price: $22</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../image/buss-exe.jpg" alt="Bus Image">
                    <div class="card-body">
                        <h5 class="card-title">City K - City L</h5>
                        <p class="card-text">Bus: Premium Bus</p>
                        <p class="card-text">Seats Available: 15</p>
                        <p class="card-text">Departure: 06:00 PM</p>
                        <p class="card-text">Price: $30</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>