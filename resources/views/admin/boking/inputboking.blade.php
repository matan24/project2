@extends('layout.admin')

@section('title', 'Input Mobil Terboking Admin | Rental Mobil')

@section('container')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Information system</h2>
          <ol>
            <li><a href="{{ route('admin.boking.detailboking') }}">Detail Mobil Terboking</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Data Mobil</h2>
                
                <table class="table table-striped table-dark table-bordered">
             
                    <thead>
                                             
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Client</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tujuan Kota</th>
                        <th scope="col">Tanggal Rental</th>
                        <th scope="col">Waktu Rental</th>
                        <th scope="col">Mobil Rental</th>
                        <th scope="col">WhatsApp/No HP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Bukti Pembayaran</th>
            
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ( $rental as $item )   
                      <tr>                             
                      <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->tujuan }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->lama_proses . " hari" }}</td>
                        <td>{{ $item->mobil }}</td>
                        <td>{{ $item->no }}</td>
                        <td>{{ $item->email }}</td>
                        <td><a href="{{ Storage::url($item->image) }}" class="btn btn-success"><i class="bi bi-eye-fill"></i></a></td> 
                 
                      @endforeach
                    </tbody>
             
                  </table>
          

              </div>

              <form action="{{ route('admin.boking.inputboking.store') }}" method="post">
                @csrf
                <br>
                @if (session('status'))
                    <div class="alert alert-warning">
                        {{ session('status') }}
                    </div>
                @endif
                <br>

            
                <div class="mb-3 row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama Penyewa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama">
                  </div>
                </div>
     
                <div class="mb-3 row">
                    <label for="no" class="col-sm-2 col-form-label">WhatsApp/hp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no" id="no">
                    </div>
                </div>

                <div class="mb-3 row">
                  <label for="mobil" class="col-sm-2 col-form-label">Mobil Rental</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mobil" id="mobil">
                  </div>
              </div>

              <div class="mb-3 row">
                <label for="plat" class="col-sm-2 col-form-label">No Kendaraan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="plat" id="plat">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Rental</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tanggal" id="tanggal">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="waktu" class="col-sm-2 col-form-label">Waktu Rental</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="waktu" id="waktu">
                </div>
              </div>
              
              <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga Rental</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="harga" id="harga">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="denda" class="col-sm-2 col-form-label">Denda</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="denda" id="denda">
                </div>
              </div>


              <div class="mb-3 row">
                <label for="pembayaran" class="col-sm-2 col-form-label">Status Pembayaran</label>
                <div class="col-sm-10">
                    <select id="pembayaran" name="pembayaran" class="form-control custom-select">
                      <option selected disabled>Status Pembayaran</option>
                      <option>
                        Lunas
                      </option>
                      <option>
                        Deposit (Dp)
                      </option>
                      <option>
                        Belum Lunas
                      </option>
                      <option>
                        Denda
                      </option>
                    </select>
                </div>
              </div>


                <div class="col-sm-10">
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>


              </form>
      
            </div>
          </section><!-- End Features Section -->

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


@endsection