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
                  <div class="form-group">
                    <label for="exampleInputEmail1">Paket Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan" value="{{$pekerjaan->pekerjaan}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Perusahaan</label>
                    <input name="penyedia_id" class="form-control" style="width: 100%;" value="{{$pekerjaan->penyedia->nama}}" disabled>
                  </div>
                  <div class="form-group">
                      <label>Lokasi</label>
                      <textarea name="lokasi" class="form-control" rows="3" placeholder="Alamat" disabled>{{$pekerjaan->lokasi}}</textarea>
                  </div>
                  <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nilai Kontrak</label>
                          <input type="number" step=".01" name="nilai_kontrak" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan" value="{{$pekerjaan->nilai_kontrak}}" disabled>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">HPS</label>
                          <input type="number" step=".01" name="hps" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan" value="{{$pekerjaan->hps}}" disabled>
                        </div>
                      </div>
                    </div>
                </div>
              <!-- /.card-body -->
            
          </div>
        </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <form action="/updatenilaipekerjaan/{{$pekerjaan->id}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="card card-default collapsed-card">
          <div class="card-header">
            <h3 class="card-title">
              <b>1. Kualitas dan Kuantitas Pekerjaan (30%)</b>
            </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>

            <ul class="nav">
              <li class="nav-item dropdown ml-auto">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-info-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 1 :
                    <span class="float-right text-muted text-sm">Kurang</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 2 :
                    <span class="float-right text-muted text-sm">Cukup</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 3 :
                    <span class="float-right text-muted text-sm">Baik</span>
                  </a>
                </div>
              </li>
            </ul>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
                <div class="form-group">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="customRadio1" name="nilai_1" value="0.3">
                    <label for="customRadio1" class="custom-control-label">>50% hasil pekerjaan memerlukan perbaikan/penggantian agar sesuai dengan ketentuan dalam kontrak. (Skor 1)</label>
                  </div>
                  <br>
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="customRadio2" name="nilai_1" value="0.6">
                    <label for="customRadio2" class="custom-control-label">≤50% hasil pekerjaan memerlukan perbaikan/penggantian agar sesuai dengan ketentuan dalam kontrak. (Skor 2)</label>
                  </div>
                  <br>
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="customRadio3" name="nilai_1" value="0.9">
                    <label for="customRadio3" class="custom-control-label">100% hasil pekerjaan sesuai dengan ketentuan dalam kontrak. (skor 3)</label>
                  </div>
                </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default collapsed-card">
          <div class="card-header">
            <h3 class="card-title"><b>2. Layanan dengan indikator komunikasi dan tingkat respon (20%)</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>

            <ul class="nav">
              <li class="nav-item dropdown ml-auto">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-info-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 1 :
                    <span class="float-right text-muted text-sm">Kurang</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 2 :
                    <span class="float-right text-muted text-sm">Cukup</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 3 :
                    <span class="float-right text-muted text-sm">Baik</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio4" name="nilai_2" value="0.2">
                <label for="customRadio4" class="custom-control-label">a. Penyedia Lambat memberti tanggapan positif atas permintaan PPK; dan <br>
                  b. Penyedia sulit diajak berdiskusi dalam penyelesaian pelaksanaan pekerjaan. (Skor 1)</label>
              </div>
              <br>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio5" name="nilai_2" value="0.4">
                <label for="customRadio5" class="custom-control-label">a. Merespon permintaan dengan penyelesaian sesuai dengan yang diminta; atau <br>
                  b. Penyedia mudah dihubungi dan berdiskusi dalam penyelesaian pelaksanaan pekerjaan. (Skor 2)</label>
              </div>
              <br>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio6" name="nilai_2" value="0.6">
                <label for="customRadio6" class="custom-control-label">a. Merespon permintaan dengan penyelesaian sesuai dengan yang diminta; dan <br>
                  b. Penyedia mudah dihubungi dan berdiskusi dalam penyelesaian pelaksanaan pekerjaan. (Skor 3)</label>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <div class="card card-default collapsed-card">
          <div class="card-header">
            <h3 class="card-title"><b>3. Waktu dengan indikator ketepatan (30%)</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>

            <ul class="nav">
              <li class="nav-item dropdown ml-auto">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-info-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 1 :
                    <span class="float-right text-muted text-sm">Kurang</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 2 :
                    <span class="float-right text-muted text-sm">Cukup</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 3 :
                    <span class="float-right text-muted text-sm">Baik</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio7" name="nilai_3" value="0.3">
                <label for="customRadio7" class="custom-control-label">Penyelesaian pekerjaan terlambat melebihi 50 (lima puluh) hari kalender dari waktu yang telah ditetapkan dalam kontrak karena kesalahan penyedia. (Skor 1)</label>
              </div>
              <br>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio8" name="nilai_3" value="0.6">
                <label for="customRadio8" class="custom-control-label">Penyelesaian pekerjaan terlambat sampai 50 hari dari kontrak kesalahan Penyedia. (Skor 2)</label>
              </div>
              <br>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio9" name="nilai_3" value="0.9">
                <label for="customRadio9" class="custom-control-label">Penyelesaian pekerjaan sesuai dengan waktu dalam kontrak atau lebih cepat sesuai kebutuhan PPK. (Skor 3)</label>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <div class="card card-default collapsed-card">
          <div class="card-header">
            <h3 class="card-title"><b>4. Biaya dengan indikator kemampuan pengendalian biaya (20%)</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>

            <ul class="nav">
              <li class="nav-item dropdown ml-auto">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-info-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 1 :
                    <span class="float-right text-muted text-sm">Kurang</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 2 :
                    <span class="float-right text-muted text-sm">Cukup</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class=""></i> Skor 3 :
                    <span class="float-right text-muted text-sm">Baik</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio10" name="nilai_4" value="0.2">
                <label for="customRadio10" class="custom-control-label">a. Tidak menginformasikan sejak awal kondisi/kejadian yang berpotensi menambah biaya; dan <br>
                  b. Mengajukan perubahan kontrak yang berdampak penambahan total biaya tanpa alasan memadai sehingga di tolak PPK. (Skor 1)</label>
              </div>
              <br>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio11" name="nilai_4" value="0.4">
                <label for="customRadio11" class="custom-control-label">a. Melakukan salah satu kondisi pada kriteria cukup. (Skor 2)</label>
              </div>
              <br>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio12" name="nilai_4" value="0.6">
                <label for="customRadio12" class="custom-control-label">Telah melakukan pengendalian biaya dengan baik dengan menginformasikan sejak awal atas kondisi yang berpotensi menambah biaya dan perubahan kontrak sudah didasari dengan alasan yang dapat dipertanggungjawabkan. (Skor 3)</label>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card-footer">
          @if (Auth::user()->status=='super')
          <a href="{{ url()->previous() }}" type="button" class="btn btn-outline-secondary">Kembali</a>
          @else
          <a href="/nilaipekerjaan" type="button" class="btn btn-outline-secondary">Kembali</a>
          @endif
          <button type="button" class="btn btn-outline-primary nilai" data-id="{{$pekerjaan->id}}">Submit</button>
        </div>
      </form>
      
      </div>
      </section>

      
