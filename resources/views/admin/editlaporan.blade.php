@extends('layout.admin')

@section('title', 'Update Laporan Rental Admin | Rental Mobil')

@section('container')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Information system</h2>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Update Laporan Penyewa</h2>
          <p></p>
        </div>

       

      </div>
    </section><!-- End Frequently Asked Questions Section -->
  
    <section id="contact" class="contact">
        <div class="container">
  
          <div class="row justify-content-center" data-aos="fade-up">
  
            <div class="col-lg-10">
  
              <div class="info-wrap">
                <div class="row">
                  <div class="col-lg-4 info">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Jl.Tapah No 5<br>Pekanbaru, Riau,  Sumatera</p>
                  </div>
  
                  <div class="col-lg-4 info mt-4 mt-lg-0">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>adrianputra7505@gmail.com</p>
                  </div>
  
                  <div class="col-lg-4 info mt-4 mt-lg-0">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+62 895-6192-35493</p>
                  </div>
                </div>
              </div>
  
            </div>
  
          </div>
  
          <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
              <a href="{{ route('admin.detaillaporan') }}" class="btn btn-info">Kembali</a>

                <form action="{{ route('admin.editlaporan.update', $rental->id )}}" method="post" enctype="multipart/form-data">
                  @method('patch')
                  @csrf
                  <br>
                  @if (session('status'))
                      <div class="alert alert-warning">
                          {{ session('status') }}
                      </div>
                  @endif
                  <br>

                  <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Denda</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="denda" id="denda"  value="{{ $rental->denda }}" >
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="sewa" class="col-sm-2 col-form-label">Status Pembayaran</label>
                    <div class="col-sm-10">
                        <select id="sewa" name="sewa" class="form-control custom-select">
                          <option selected disabled>Status Pembayaran</option>
                          <option>
                            Lunas
                          </option>
                          <option>
                            Deposit (DP)
                          </option>
                          <option>
                            Diproses
                          </option>
                          <option>
                            Denda
                          </option>
                          <option>
                            Terhutang
                          </option>
                        </select>
                    </div>
                  </div>
{{-- 
                  <div class="mb-3 row">
                    <label for="selesai" class="col-sm-2 col-form-label">Waktu Selesai Rental</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="selesai" id="selesai">
                    </div>
                  </div> --}}
                  
                  <div class="col-sm-10">
                      <button type="submit" class="btn btn-info">Update data</button>
                  </div>


                </form>


            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->

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

  </main><!-- End #main -->


@endsection