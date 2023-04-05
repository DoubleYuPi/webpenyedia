 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      @foreach ($penyedia as $penyedias)
        
      @endforeach
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$penyedia->count('nama')}}</h3>

                <p>Penyedia</p>
              </div>
              <div class="icon">
                <i class="fas fa-store"></i>
              </div>
              <a href="/datapenyedia" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$pekerjaan->count('pekerjaan')}}</h3>

              <p>Pekerjaan</p>
            </div>
            <div class="icon">
              <i class="fas fa-map"></i>
            </div>
            <a href="/datapekerjaan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>Rp. {{number_format($pekerjaan->sum('nilai_kontrak'))}}</h3>

              <p>Nilai Kontrak</p>
            </div>
            <div class="icon">
              <i class="fas fa-money-bill-wave"></i>
            </div>
            <a href="/datapekerjaan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        {{-- <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <div id="map" style="width: 100%; height: 380px;"></div>
          <script>
            var map = L.map('map').setView([-0.020556, 109.341389], 13);
  
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              maxZoom: 19,
              attribution: '© OpenStreetMap'
              }).addTo(map);

              //marker
              @foreach ($pekerjaan as $pekerjaans)
                L.marker([{{$pekerjaans->lati}}, {{$pekerjaans->longi}}]).bindPopup("{{$pekerjaans->nama}} <p>{{$pekerjaans->lokasi}}</p> <img src='{{asset('gambarpekerjaan/'.$pekerjaans->gambar)}}' style='width: 150px' />").addTo(map);
              @endforeach
          </script>  
          <!-- /.card -->
        </section>
        <!-- right col -->
      </div>
<br>
      <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Tabel Nilai Penyedia</h3>
                      
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                      <table id="tabelpenyedia" class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">No.</th>
                            <th>Nama Penyedia</th>
                            <th>Nilai</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $no = 1; @endphp
                          @foreach ($penyedia as $penyedias)
                          <tr>
                            <td>{{$no++}}</td>
                            <td>{{$penyedias->nama}}</td>
                            <td>{{round($penyedias->pekerjaans()->whereNotNull('status')->avg('nilai_total'),1)}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
      
                
        </div>
    </section>
        
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>