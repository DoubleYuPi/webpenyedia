<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com">

  <link rel="icon" href="admin/dist/img/logomandor.jpeg">

  <title>Sistem Informasi Manajemen Vendor</title>

  <link rel="stylesheet" href="../user/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../user/assets/css/bootstrap.css">

  <link rel="stylesheet" href="../user/assets/css/maicons.css">

  <link rel="stylesheet" href="../user/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../user/assets/css/theme.css">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
   integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
   crossorigin=""/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">

   <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
   integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
   crossorigin=""></script>

   <style>
    #mapid { min-height: 500px; width: 500px;}

    table.scrolldown {
         width: 100%;
         border-spacing: 0;
      }
          
      table.scrolldown tbody, table.scrolldown thead {
         display: block;
      }   
      thead tr th {
         height: 50px; 
         line-height: 60px;
         text-align:center;
      }          
      table.scrolldown tbody {
         height: 500px; 
         overflow-y: auto;
         overflow-x: hidden; 
      }
          
      tbody { 

      }
          
      tbody td, thead th {
         width : 500px;
      }
      td {
         text-align:center;
      }
   </style>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed">
      <div class="container">
        
        <img src="admin/dist/img/logomandor.jpeg" alt="simandor" height="70px" width="100px">
        <a href="/" class="navbar-brand">SI-<span class="text-primary">MANDOR</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

  
        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="/" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="#hubungi" class="nav-link">Hubungi Kami</a>
            </li>
          </ul>

          @if (Route::has('login'))
            
            @auth

            <x-app-layout>

            </x-app-layout>            

            @else

            <div class="ml-auto">
              <a href="{{route('login')}}" class="btn btn-outline rounded-pill">Log In</a>
            </div>   

            @endauth

            @endif
      
        </div>
      </div>
    </nav>

  
          <div class="page-hero bg-image overlay-dark" style="background-image: url(../user/assets/img/kantowalkotpon.jpg);">
            <div class="hero-section">
              <div class="container text-center wow zoomIn">
                <h1 class="display-4">Sistem Informasi Manajemen Vendor</h1>
                <span class="subhead" style="color:whitesmoke">"Menjadikan Penyedia Barang/Jasa Partner Pembangunan Kota Pontianak"</span>
              </div>
            </div>
          </div>

    <div class="page-banner home-banner">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 class="title-section">Tentang <span class="marked">SI-MANDOR</span></h1>
            <div class="divider"></div>
            <p class="text-lg mb-5">Sistem Informasi Manajemen Vendor merupakan situs layanan pengelolaan penyedia barang/jasa Pemerintah Kota Pontianak. Layanan pada situs ini termasuk profil, penilaian kinerja dan 
              pendataan pengalaman personil penyedia barang/jasa.
            </p>

            {{-- <a href="#" class="btn btn-outline border text-secondary">Info Selengkapnya</a> --}}
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place">
              <img src="admin/dist/img/logomandor.jpeg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </header>

  <main>
    <div class="page-section features">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="../user/assets/img/price.png" alt="" style="width: 75px">
              </div>
              <div>
                <h5>Meningkatkan value for money dari penyedia barang/jasa</h5>
                <p>Yaitu kombinasi yang paling menguntungkan antara biaya, kualitas, dan keberlanjutan untuk memenuhi kebutuhan pengadaan barang/jasa Pemerintah Kota Pontianak</p>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="../user/assets/img/handshake.png" alt="" style="width: 80px">
              </div>
              <div>
                <h5>Mengelola Hubungan dengan penyedia barang/Jasa</h5>
                <p>Sehingga terjalin kerjasama yang dapat mendukung strategi dan kinerja Pemerintah Kota Pontianak</p>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="../user/assets/img/profile.png" alt="" style="width: 75px">
              </div>
              <div>
                <h5>Memperoleh profil penyedia barang/jasa berdasarkan kinerja dalam pelaksanaan kontrak</h5>
                <p>Untuk memudahkan dalam proses pemilihan penyedia, pelaksanaan kontrak dan evaluasi kinerja pengadaan barang/jasa secara keseluruhan.</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    @include('../user.data')
  
    <div class="page-section">
      <div class="container">
        <div id="map" style="width: 100%; height: 500px;"></div>
        <div>
          <label for="year">Pilih Tahun:</label>
          <select id="year">
              <option value="all">Semua</option>
              @foreach ($pekerjaan->unique('ta') as $pekerjaans)
                  <option value="{{ $pekerjaans->ta }}">{{$pekerjaans->ta}}</option>
              @endforeach
          </select>
        </div>

          <script>
            var map = L.map('map').setView([-0.020556, 109.341389], 13);
  
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              maxZoom: 19,
              attribution: '© OpenStreetMap'
              }).addTo(map);

              var markers = [];

              //marker
              @foreach ($pekerjaan as $pekerjaans)
                var marker = L.marker([{{$pekerjaans->lati}}, {{$pekerjaans->longi}}]).bindPopup("{{$pekerjaans->nama}} <p>{{$pekerjaans->lokasi}}</p> <img src='{{asset('gambarpekerjaan/'.$pekerjaans->gambar)}}' style='width: 150px' />");
                markers.push({marker: marker, ta: '{{$pekerjaans->ta}}'});
              @endforeach

              function filterMarkers(ta) {
                for (var i = 0; i < markers.length; i++) {
                  var markerTa = markers[i].ta;
                    if (ta == "all" || markerTa === ta) {
                      markers[i].marker.addTo(map);
                    } else {
                        markers[i].marker.removeFrom(map);
                    }
                }
              }
               // Initialize markers with the current year shown
              var currentYear = new Date().getFullYear().toString();
              filterMarkers(currentYear);
              document.getElementById("year").value = currentYear;

              // Filter markers when user selects a year
              document.getElementById("year").addEventListener("change", function() {
              var ta = this.value;
              filterMarkers(ta);
              });

          </script>
      </div>
    </div>

    <div class="page-section">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="subhead">{{$ldate = date('Y-m-d')}}</div>
          <h2 class="title-section">Tabel <span class="marked">Data</span> Penyedia</h2>
          <div class="divider mx-auto"></div>
        </div>
             
              <table class="table w-full table-borderless scrolldown">
                  <thead class="thead-dark text-sm leading-normal">
                      <tr class="flex w-full mb-4">
                          <th class="py-3 px-6 w-10p" style="font-size:25px">No.</th>
                          <th class="py-3 px-6 w-45p" style="font-size:25px">Penyedia</th>
                          <th class="py-3 px-6 w-45p" style="font-size:25px">Valuasi</th>
                      </tr>
                  </thead>
                  <tbody class="bg-grey-light flex flex-col items-center justify-between">
                    @php 
                    $no = 1; 
                    $penyedia = App\Models\Penyedia::withCount(['pekerjaans as nilai_total_avg' => function ($query) {
                    $query->select(DB::raw('ROUND(AVG(nilai_total), 1)'))->whereNotNull('status');
                    }])->orderByDesc('nilai_total_avg')->take(10)->get();
                    @endphp
                    @foreach ($penyedia as $penyedias)
                    {{-- ->sortByDesc('jumlah_paket') --}}
                    <tr class="flex w-full mb-4">
                    <td class="py-3 px-6 w-10p">{{$no++}}</td>
                    <td class="py-3 px-6 w-45p">{{$penyedias->nama}}</td>
                    <td class="py-3 px-6 w-45p">{{$penyedias->nilai_total_avg }}</td>
                    </tr>

                    @endforeach
              </table>    

          <!--<div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>No time-confusing</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
          </div>-->
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->*
  

  </main>

  <footer class="page-footer" id="hubungi">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-3 py-3">
          <img src="admin/dist/img/logomandor.jpeg" alt="simandor" width="300px">
        </div>
        <div class="col-lg-3 py-3">
        </div>
        <div class="col-lg-3 py-3">
          <h5>Kontak Kami</h5>
          <p>Jalan Rahadi Usman No.3 Kota Pontianak<br>Kalimantan Barat, Indonesia</p>

          <p><a href="mailto: blp@pontianak.go.id" >blp@pontianakkota.go.id</a></p>
          <p><a href="https://wa.me/628115675076" target="_blank" rel="noopener noreferrer">+62 811-5675-076</a></p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Media Sosial</h5>

          <div class="sosmed-button mt-4">
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 py-2">
          <p id="copyright">&copy; 2022 UKPBJ KOTA PONTIANAK. All rights reserved</p>
        </div>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->



  <script src="../user/assets/js/jquery-3.5.1.min.js"></script>

  <script src="../user/assets/js/bootstrap.bundle.min.js"></script>

  <script src="../user/assets/vendor/wow/wow.min.js"></script>

  <script src="../user/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../user/assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="../user/assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="../user/assets/js/google-maps.js"></script>

  <script src="../user/assets/js/theme.js"></script>


</body>
</html>