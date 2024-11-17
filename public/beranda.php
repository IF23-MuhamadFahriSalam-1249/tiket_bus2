<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../image/ikan.png">
    <title>Busking.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- style di assets -->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">

</head>

<body id="home" class="d-flex flex-column h-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light py-1 bg-nav shadow-sm fixed-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="">
                <img src="../image/logo-buss.png" alt="Buss Lightyear" width="42" height="42"
                    class="d-inline-block mt--2 me-2" />
                <span class="text-custom fs-4 fw-bolder">Busking</span>
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

    <!-- Home Section -->
    <section class="home-section d-flex align-items-center">
        <div class="container mt-2 pt-3">
            <h1 class="text-center text-white fw-bolder">Book Your Ticket Now</h1>
            <form class="mt-4">
                <div class="col-lg-3 mb-4">
                    <label for="departure" class="form-label text-white">Dari Kota</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-bus-alt"></i></span>
                        <select class="form-select" id="departure">
                            <option selected disabled>Pilih Kota Keberangkatan</option>
                            <option>Surabaya</option>
                            <option>Jakarta</option>
                            <option>Yogyakarta</option>
                            <option>Bandung</option>
                            <option>Malang</option>
                            <option>Tangerang</option>
                            <option>Semarang</option>
                            <option>Solo</option>
                            <option>Silboga</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <label for="destination" class="form-label text-white">Ke Kota</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-bus-alt"></i></span>
                        <select class="form-select" id="destination">
                            <option selected disabled>Pilih Kota Tujuan</option>
                            <option>Yogyakarta</option>
                            <option>Denpasar</option>
                            <option>Surabaya</option>
                            <option>Jakarta</option>
                            <option>Magelang</option>
                            <option>Cirebon</option>
                            <option>Purworejo</option>
                            <option>Purwokerto</option>
                            <option>Bayuwangi</option>
                            <option>Sinngaraja</option>
                            <option>Medan</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <label for="date" class="form-label text-white">Tanggal Keberangkatan</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        <input type="date" class="form-control" id="date">
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <label for="passengers" class="form-label text-white">Jumlah Penumpang</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="number" class="form-control" id="passengers"
                            placeholder="Masukkan jumlah penumpang">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Search Tickets</button>
            </form>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="container-fluid">
        <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <a href="#service1">
                            <img src="../image/layanan1.jpg" class="square-image d-block" alt="Service 1">
                        </a>
                        <a href="#service2">
                            <img src="../image/layanan2.jpg" class="square-image d-block" alt="Service 2">
                        </a>
                        <a href="#service3">
                            <img src="../image/layanan3.jpg" class="square-image d-block" alt="Service 3">
                        </a>
                        <a href="#service2">
                            <img src="../image/layanan2.jpg" class="square-image d-block" alt="Service 2">
                        </a>
                        <a href="#service3">
                            <img src="../image/layanan3.jpg" class="square-image d-block" alt="Service 3">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <a href="#service4">
                            <img src="../image/layanan1.jpg" class="square-image d-block" alt="Service 4">
                        </a>
                        <a href="#service5">
                            <img src="../image/layanan2.jpg" class="square-image d-block" alt="Service 5">
                        </a>
                        <a href="#service6">
                            <img src="../image/layanan3.jpg" class="square-image d-block" alt="Service 6">
                        </a>
                        <a href="#service5">
                            <img src="../image/layanan2.jpg" class="square-image d-block" alt="Service 5">
                        </a>
                        <a href="#service6">
                            <img src="../image/layanan3.jpg" class="square-image d-block" alt="Service 6">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <a href="#service7">
                            <img src="../image/layanan1.jpg" class="square-image d-block" alt="Service 7">
                        </a>
                        <a href="#service8">
                            <img src="../image/layanan2.jpg" class="square-image d-block" alt="Service 8">
                        </a>
                        <a href="#service9">
                            <img src="../image/layanan3.jpg" class="square-image d-block" alt="Service 9">
                        </a>
                        <a href="#service8">
                            <img src="../image/layanan2.jpg" class="square-image d-block" alt="Service 8">
                        </a>
                        <a href="#service9">
                            <img src="../image/layanan3.jpg" class="square-image d-block" alt="Service 9">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <a href="#service10">
                            <img src="../image/layanan1.jpg" class="square-image d-block" alt="Service 10">
                        </a>
                        <a href="#service11">
                            <img src="../image/layanan2.jpg" class="square-image d-block" alt="Service 11">
                        </a>
                        <a href="#service12">
                            <img src="../image/layanan3.jpg" class="square-image d-block" alt="Service 12">
                        </a>
                        <a href="#service11">
                            <img src="../image/layanan2.jpg" class="square-image d-block" alt="Service 11">
                        </a>
                        <a href="#service12">
                            <img src="../image/layanan3.jpg" class="square-image d-block" alt="Service 12">
                        </a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>