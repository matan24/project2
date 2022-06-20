@extends('layout.admin')

@section('title', 'Home Admin | Rental Mobil')

@section('container')

<body>
  
    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
  
        <div class="carousel-inner" role="listbox">
  
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url( {{ asset('wow/assets/img/slide/o.jpg') }} );">
            <div class="carousel-container">
              <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>Visi<span></span></h2>
                <p>
                  Menjadi perusahaan transportasi yang berkelas dan selalu mampu memberi solusi penyewaan mobil terbaik untuk kebutuhan bisnis, perusahaan / kantor, keluarga maupun personal
                </p>
                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
              </div>
            </div>
          </div>
  
          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url( {{ asset('wow/assets/img/slide/a.jpg);') }}">
            <div class="carousel-container">
              <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>Misi</h2>
                <p>1. Berusaha memberikan yang terbaik kepada pelanggan baik dari segi pelayanan,tepat waktu,kondisi kendaraan maupun meberikan harga yang mampu bersaing.</p>
                <p>2.	Menghargai kritik dan saran para pelanggan untuk menggambil langkah terbaik</p>
                <p>3.	Segala tindakan  maupun perbuatan harus menunjukan bahwa Rental Mobil Pku Ataya adalah yang tepat dan terpecaya sebagai tempat penyewaan mobil yang mengutamakan kepuasan kons</p>
                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
              </div>
            </div>
          </div>
  
          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url( {{ asset('wow/assets/img/slide/r.jpg);') }}">
            <div class="carousel-container">
              <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>Layanan terbaik</h2>
                <p> Kami memberikan layanan rental mobil untuk anda dan keluarga serta nyaman dan aman.</p>
                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
              </div>
            </div>
          </div>
  
        </div>
  
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
  
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
  
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
  
      </div>
    </section><!-- End Hero -->
  
    <main id="main">
  
      <!-- ======= About Us Section ======= -->
      <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">
  
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-right">
              <h2>Syarat Rental Mobil PRIBADI</h2>
              <p>1. Kartu Identitas (KTP) suami & istri</p>
              <p>2. Kartu Keluarga (KK)</p>
              <p>3. Rekening telepon / listrik</p>
              <p>4. Pajak Bumi dan Bangunan (PBB)</p>
              <p>5. Surat Ijin Mengemudi (SIM)</p>
              <p>6. Surat Keterangan dari perusahaan</p>
              <p>7. Deposit untuk asuransi (dikembalikan jika tidak terjadi kecelakaan)</p>
              <p>8. Bersedia di Survey</p>
              <p>9. Bersedia ambil Photo perental dan Pihak Keluarga</p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <h3><b>RENTAL MOBIL UNTUK PERUSAHAAN</b></h3>
              <ul>
                <li><i class="ri-check-double-line"></i> 1. SIUP, NPWP, TDP, surat keterangan Domisili</li>
                <li><i class="ri-check-double-line"></i> 2. Kartu Identitas (KTP) dari direksi atau pihak yang berwenang mewakili perusahaan</li>
                <li><i class="ri-check-double-line"></i> 3. Surat Ijin Mengemudi (SIM)</li>
                <li><i class="ri-check-double-line"></i> 4. Rekening telepon / listrik</li>
                <li><i class="ri-check-double-line"></i> 5. Deposit untuk asuransi (dikembalikan jika tidak terjadi kecelakaan)</li>
              </ul>
              <h3><b>RENTAL MOBIL WARGA ASING</b></h3>
              <ul>
                <li><i class="ri-check-double-line"></i> 1. Pasport</li>
                <li><i class="ri-check-double-line"></i> 2. KITAS</li>
                <li><i class="ri-check-double-line"></i> 3. Surat Keterangan dari perusahaan</li>
                <li><i class="ri-check-double-line"></i> 4. Surat Ijin Mengemudi (SIM)</li>
                <li><i class="ri-check-double-line"></i> 5. Deposit untuk asuransi (dikembalikan jika tidak terjadi kecelakaan)</li>
              </ul>
            </div>
          </div>
  
        </div>
      </section><!-- End About Us Section -->
  
      <!-- ======= Our Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Clients</h2>
          </div>
  
          <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
  
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ asset('wow/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ asset('wow/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ asset('wow/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ asset('wow/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ asset('wow/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ asset('wow/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ asset('wow/assets/img/clients/client-7.png') }}" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ asset('wow/assets/img/clients/client-8.png') }}" class="img-fluid" alt="">
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Our Clients Section -->
  
    </main><!-- End #main -->
  
    <!-- ======= Footer ======= -->
    <footer id="footer">
  
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>RENTAL MOBIL PKU ATAYA</h3>
              <p>
                Jl.Tapah no 5<br>
                Pekanbaru, Riau<br>
                Indonesia <br><br>
                <strong>Phone:</strong> +62 895-6192-35493<br>
                <strong>Email:</strong> adrianputra7505@gmail.com<br>
              </p>
            </div>
  
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Menu</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Paket Rental</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Rental Sekarang</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Pilihan Mobil</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Layanan Rental</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terbaik</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Mudah</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Cepat</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Aman</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Pasti</a></li>
              </ul>
            </div>
  
            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Hubungi Kami Segera</h4>
              <p>Layanan kontak resmi rental mobil pku ataya</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container d-md-flex py-4">
  
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Rental Mobil Pekanbaru Ataya</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->
  
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  
  </body>


@endsection