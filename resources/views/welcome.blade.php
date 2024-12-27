<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile - Internet Provider</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom Styling */
        body {
            font-family: Arial, sans-serif;
        }
            /* Animasi saat cursor mengarah ke gambar */
        .card-img-top {
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.1); /* Zoom in */
            filter: brightness(1.1); /* Tambahkan efek cerah */
        }
        .hero-section {
            background: url('{{ asset('images/hero-background.jpg') }}') no-repeat center center/cover;
            color: white;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .hero-text {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
        }
        .services-section img {
            max-height: 300px;
        }
        .nav-link {
            white-space: nowrap;
        color: #353535 !important; /* Ganti #ff5722 dengan warna yang Anda inginkan */
        }
        /* Background gradien dengan transparansi */
        .navbar {
            /* background: linear-gradient(90deg, rgba(0, 123, 255, 0.8), rgba(0, 123, 255, 0.5)); */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
        }

        /* Navbar teks */
        .nav-link {
            transition: all 0.3s ease-in-out;
            font-size: 1rem;
        }

        .nav-link:hover {
            color: #00aaff !important;
            /* text-decoration: underline; */
        }
            #contact img {
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

            /* Mobile toggle icon */
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255,255,255,1)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
/* Mengatur margin otomatis untuk kolom di tengah */
        /* Atur overlay konten */
        .overlay-content {
            position: absolute;
            top: 50%; /* Posisikan di tengah vertikal */
            left: 50%; /* Posisikan di tengah horizontal */
            transform: translate(-50%, -50%); /* Koreksi posisi tengah */
            background-color: rgba(0, 0, 0, 0.6); /* Background semi-transparan */
            color: #fff; /* Warna teks putih */
            border-radius: 10px; /* Sudut melengkung */
            padding: 20px; /* Ruang dalam */
            width: 90%; /* Lebar overlay */
        }

        /* Teks dalam overlay */
        .overlay-content h2 {
            font-size: 1.75rem;
            font-weight: bold;
        }

    .overlay-content p, .overlay-content ul {
        margin: 10px 0;
        font-size: 1rem;
    }
    footer {
        background-color: #6c757d; /* Abu-abu kustom */
    }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/maxx no bg.png') }}" alt="Logo" class="img-fluid" style="max-height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" style="color: #fff; font-weight: bold;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" style="color: #fff;">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: #fff;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" style="border-radius: 20px;">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- Hero Section -->
    <section class="hero-section text-center" style="background-image: url('{{ asset('images/internet.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 90vh; color: white; display: flex; justify-content: center; align-items: center;">
        <div class="hero-text">
            <h1 class="display-4 fw-bold">KONEKSI INTERNET CEPAT & ANDAL</h1>
            <p class="lead">Nikmati pengalaman internet terbaik untuk kebutuhan rumah maupun bisnis Anda</p>
            <a href="#services" class="btn btn-primary btn-lg">Jelajahi Layanan</a>
        </div>
    </section>

     <!-- About Us Section -->
     <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-4">Tentang Kami</h2>
                    <p>
                        Kami adalah penyedia layanan internet terkemuka yang berkomitmen memberikan koneksi terbaik untuk pelanggan kami. 
                        Dengan teknologi serat optik modern, kami memastikan layanan yang cepat, stabil, dan terpercaya.
                    </p>
                    <ul>
                        <li>Koneksi internet hingga 1 Gbps</li>
                        <li>Dukungan teknis 24/7</li>
                        <li>Solusi untuk rumah dan bisnis</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/team.jpg') }}" alt="Our Team" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>
    
    {{-- Service --}}
   <section id="services" class="py-5">
    <div class="container text-center">
        <h2 class="mb-4">Layanan Kami</h2>
        <p class="mb-5">Kami menyediakan berbagai solusi internet yang sesuai untuk semua kebutuhan Anda.</p>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <img src="{{ asset('images/streaming.jpg') }}" class="card-img-top" alt="Streaming">
                    <div class="card-body">
                        <h5 class="card-title">Streaming Tanpa Buffering</h5>
                        <p class="card-text">Nikmati kecepatan tinggi untuk streaming film dan video favorit Anda tanpa gangguan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <img src="{{ asset('images/gaming.jpg') }}" class="card-img-top" alt="Gaming">
                    <div class="card-body">
                        <h5 class="card-title">Gaming Responsif</h5>
                        <p class="card-text">Rasakan pengalaman bermain game online tanpa lag dengan latensi rendah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <img src="{{ asset('images/business.jpg') }}" class="card-img-top" alt="Business">
                    <div class="card-body">
                        <h5 class="card-title">Solusi Bisnis</h5>
                        <p class="card-text">Koneksi internet yang andal untuk mendukung produktivitas bisnis Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Coverage Section -->
  <section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-8 col-10 position-relative">
                <!-- Gambar -->
                <img src="{{ asset('images/peta.jpg') }}" alt="Our Team" class="img-fluid rounded shadow w-100">
                <!-- Overlay Deskripsi -->
                <div class="overlay-content text-white text-center p-3">
                    <h2 class="h4">CEK LOKASI</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptate ipsum necessitatibus praesentium illo ex at, consectetur rem voluptatem impedit aut accusamus sint, nesciunt minima ullam temporibus. Officia, voluptas quia!</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-8 col-10 position-relative">
                <div class="card border-0 shadow">
                    <img src="{{ asset('images/tiang.jpg') }}" alt="Our Team" class="img-fluid rounded shadow w-100">
                    <div class="overlay-content text-white text-center p-3">
                    <h2 class="h4">Tiang</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptate ipsum necessitatibus praesentium illo ex at, consectetur rem voluptatem impedit aut accusamus sint, nesciunt minima ullam temporibus. Officia, voluptas quia!</p>
                </div>
                </div>
            </div>
        </div>
        
    </div>
    
</section>
{{-- contact --}}
<section id="contact" class="contact section py-5">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2 class="text-center text-primary mb-4">Contact</h2>
      <p class="text-center"><span class="fw-bold">Need Help?</span> <span class="description-title text-muted">Contact Us</span></p>
    </div><!-- End Section Title -->
  
    <div class="container" data-aos="fade-up" data-aos-delay="100">
  
      <div class="row gy-4">
  
        <div class="col-lg-5">
          <div class="info-wrap bg-light p-4 rounded shadow-sm">
            <div class="info-item d-flex mb-3" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0 me-3 fs-4 text-primary"></i>
              <div>
                <h5 class="fw-bold">Address</h5>
                <p class="mb-0">A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->
  
            <div class="info-item d-flex mb-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0 me-3 fs-4 text-primary"></i>
              <div>
                <h5 class="fw-bold">Call Us</h5>
                <p class="mb-0">+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->
  
            <div class="info-item d-flex mb-3" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0 me-3 fs-4 text-primary"></i>
              <div>
                <h5 class="fw-bold">Email Us</h5>
                <p class="mb-0">info@example.com</p>
              </div>
            </div><!-- End Info Item -->
  
            <!-- Google Map Embed -->
            <div class="mt-4">
              <iframe src="https://www.google.com/maps/embed?pb=..." frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
  
        <div class="col-lg-7">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
  
              <div class="col-md-6">
                <label for="name-field" class="form-label fw-bold">Your Name</label>
                <input type="text" name="name" id="name-field" class="form-control" required="">
              </div>
  
              <div class="col-md-6">
                <label for="email-field" class="form-label fw-bold">Your Email</label>
                <input type="email" class="form-control" name="email" id="email-field" required="">
              </div>
  
              <div class="col-md-12">
                <label for="subject-field" class="form-label fw-bold">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject-field" required="">
              </div>
  
              <div class="col-md-12">
                <label for="message-field" class="form-label fw-bold">Message</label>
                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
              </div>
  
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary mt-3">Send Message</button>
              </div>
  
            </div>
          </form>
        </div><!-- End Contact Form -->
  
      </div>
  
    </div>
  
  </section>
    <!-- Footer -->
    <footer id="footer" class="footer text-light "  style="background: url('images/footer.jpg') no-repeat center center/cover;">>
        <!-- Footer Top Section -->
        <div class="container footer-top py-4">
          <div class="row gy-4">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="index.html" class="d-flex align-items-center text-dark mb-3">
                <span class="sitename h5 mb-0">
                    <img src="{{ asset('images/maxx no bg.png') }}" alt="Logo" class="img-fluid" style="max-height: 80px;">
                </span>
              </a>
              <div class="footer-contact pt-3">
                <p class="text-light mb-2">Jl. Mangesti Raya, Dusun 2, Mayang, Kec. Gatak, Kabupaten Sukoharjo, Jawa Tengah</p>
                <p class="text-light mb-2"><strong>Phone:</strong> <span>0899-1066-262</span></p>
                <p class="text-light"><strong>Email:</strong> <span>info@maxnetplus.id </span></p>
              </div>
            </div>
    
            <!-- Useful Links Section -->
            <div class="col-lg-2 col-md-3 footer-links">
              <h4 class="text-white mb-3">Useful Links</h4>
              <ul class="list-unstyled text-muted">
                <li><i class="bi bi-chevron-right"></i> <a href="#" class="text-light">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#" class="text-light">About us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#" class="text-light">Services</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#" class="text-light">Terms of service</a></li>
              </ul>
            </div>
    
            <!-- Our Services Section -->
            <div class="col-lg-2 col-md-3 footer-links">
              <h4 class="text-white mb-3">Our Services</h4>
              <ul class="list-unstyled text-muted">
                <li><i class="bi bi-chevron-right"></i> <a href="#" class="text-light">Web Design</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#" class="text-light">Web Development</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#" class="text-light">Product Management</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#" class="text-light">Marketing</a></li>
              </ul>
            </div>
    
            <!-- Social Links Section -->
            <div class="col-lg-4 col-md-12">
              <h4 class="text-white mb-3">Follow Us</h4>
              <p class="text-muted mb-4">Stay connected with us through social media</p>
              <div class="social-links d-flex">
                <a href="#" class="text-light mx-2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-light mx-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-light mx-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-light mx-2"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
    
          </div>
        </div>
    
        <!-- Footer Bottom Section -->
        <div class="container copyright text-center mt-4">
          <p class="text-muted mb-0">© <span>Copyright</span> <strong class="px-1 sitename">BizLand</strong> <span>All Rights Reserved</span></p>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/" class="text-muted">BootstrapMade</a> Distributed by <a href="https://themewagon.com" class="text-muted">ThemeWagon</a>
          </div>
        </div>
    
    </footer>
    
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
