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
        <form action="/updatepersonilpekerjaan/{{$pekerjaan->id}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <b>Tambah Personil</b>
            </h3>
            <div class="card-tools">
              <a href="/personilbaru" type="button" class="btn btn-outline-success btn-block"><i class="fa fa-plus"></i>&nbsp Tambah Personil</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputPassword1">Personil Pekerjaan</label>
              <select name="personil_id" class="form-control select2bs4" style="width: 50%;">
                <option value="" disabled selected>Pilih Personil</option>
                @foreach ($personil as $personils)
                <option value="{{$personils->id}}">
                  {{$personils->nama}}
                </option>
                @endforeach
              </select>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card-footer">
          <a href="/datapekerjaan" type="button" class="btn btn-outline-secondary">Kembali</a>
          <button type="button" class="btn btn-outline-primary nilai" data-id="{{$pekerjaan->id}}" data-nama="{{$pekerjaan->pekerjaan}}">Submit</button>
        </div>
      </form>
      
      </div>
      </section>

      
