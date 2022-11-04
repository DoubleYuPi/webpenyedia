<section class="content">
  <div class="container-fluid">
    <div class="card card-default color-palette-box">
      <div class="card-header">
        <h3 class="card-title">
          <b>{{$penyedia->nama}}</b>
        </h3>
      </div>
      <div class="card-body">
        <div class="col-12">
          <h5><i class="fas fa-id-card"></i>&nbsp NPWP: {{$penyedia->npwp}}</h5><br>
          <h5><i class="fas fa-map-pin"></i>&nbsp Alamat: {{$penyedia->alamat}}</h5>
        </div>
      </div>
      <hr class="solid" style="border-top: 1px solid;">
      <div class="card-body">
        <div class="col-12">
          <h5><i class="fas fa-building"></i>&nbsp Bentuk Usaha: {{$penyedia->bentuk_usaha}}</h5><br>
          <h5><i class="fas fa-envelope"></i>&nbsp Email: {{$penyedia->email}}</h5>
        </div>
      </div>
    </div>
  </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      @foreach ($penyedia as $penyedias)
        
      @endforeach
        <div class="row">
          {{-- <div class="col-lg-4 col-6">
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
          </div> --}}
        <!-- ./col -->
        <div class="col-lg-6 col-8">
          <!-- small box -->
          <div class="small-box bg-lightblue">
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
        <div class="col-lg-6 col-8">
          <!-- small box -->
          <div class="small-box bg-lightblue">
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
      </div>
    </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
                <div class="card-body">
                  
                </div>
              <!-- /.card-body -->
            
          </div>
        </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
                  <div class="card-body">
                    
                  </div>
                <!-- /.card-body -->
              
            </div>
          </div>
      </section>