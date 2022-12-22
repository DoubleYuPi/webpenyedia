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
                    <label for="exampleInputPassword1">Nama Personil</label>
                    <input name="personil_id" class="form-control" style="width: 100%;" value="{{$pekerjaan->personil->nama}}" disabled>
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
        <form action="/updatebahppekerjaan/{{$pekerjaan->id}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><b>Upload Dokumen</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>

            <ul class="nav">
              <li class="nav-item dropdown ml-auto">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-info-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <p>Penyedia melakukan serah terima hasil pekerjaan kepada PPK melalui Berita Acara Serah Terima (BAST) dan/atau Berita Acara Serah Terima Akhir (BAST A) untuk pekerjaan barang/jasa yang memerlukan masa pemeliharaan/Garansi.</p>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <p>PPK menghentikan kontrak karena keadaan kahar dan pekerjaan tidak dapat dilanjutkan/diselesaikan atau</p>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <p>PPK melakukan pemutusan kontrak karena kesalahan Penyedia</p>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <label></label>
              <select name="status" class="form-control select2" style="width: 35%;">
                <option selected="selected">Berita Acara Serah Terima (BAST)</option>
                <option>Surat Pemutusan Kontrak Karena Keadaan Kahar</option>
                <option>Surat Pemutusan Kontrak Karena Kesalahan Penyedia</option>
              </select>
            </div>
            <h3 style="color: red"><b>*</b>Perhatian! Memilih opsi <b>"Surat Pemutusan Kontrak Karena Kesalahan Penyedia"</b> tidak dapat melanjutkan ke tahap penilaian!</h3>
            <br>
            <div class="form-group">
              <label for="exampleInputEmail1">Dokumen</label>
              <input type="file" name="bahp" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan">
            </div>
            <!-- /.row -->
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

      
