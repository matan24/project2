@extends('layout.admin')

@section('title', 'Data Detail Rental Admin | Rental Mobil')

@section('container')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Information system</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('admin.inputrental') }}">Input Rental</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Data Hari dan Waktu Rental Mobil</h2>
              </div>

              <table class="table table-striped table-dark">

                @if (session('status'))
                <div class="alert alert-danger">
                  {{ session('status')}}
                </div>
                 @endif

                <a href="{{ route('admin.inputrental') }}" class="btn btn-warning mb-4">Kembali</a>
                <thead>
                                         
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Hari Rental</th>
                    <th scope="col">Waktu Rental</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $input as $item )   
                  <tr>                             
                  <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td class="">
                        <button name="editButton" data-toggle="modal" data-target="#editModal" data-id="{{ $item->id }}" class="btn btn-warning mb-2"><i class="fa-solid fa-pen-to-square"></i></button>
      
                        <form action="{{ route('admin.showinput.delete', $item->id) }}" method="post">
                          @method('delete')
                          @csrf 
                          <button type="submit" class="btn btn-danger mr-2"><i class="bi bi-trash2-fill"></i></button>
                        </form>
      
                      </td>           
    
                  @endforeach
                </tbody>
         
              </table>
      
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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editButton">
      Launch static backdrop modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="#editModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <div class="modal-body">

    @push('script')
    <script src="{{ asset('wow/assets/js/jquery-3.6.0.js') }}"></script>
        <script>
          $(function(){
              let buttonEdit = $("button[name*='editButton']")
              let editModal = $("div#editModal")

              buttonEdit.on("click",function(){
                let id = $(this).attr('data-id');
                let row = $(this).closest("tr");
                let nama = row.find("td[name*='nama']").html();
                let waktu = row.find("td[name*='waktu']").html();
                       
                editModal.modal('show');

                // console.log(id)

              });
          })
        </script>
    @endpush


@endsection