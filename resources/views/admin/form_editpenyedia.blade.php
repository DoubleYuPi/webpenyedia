<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/updatepenyedia/{{$penyedia->id}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Usaha</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Perusahaan" value="{{$penyedia->nama}}" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NPWP</label>
                  <input type="text" name="npwp" class="form-control" id="exampleInputPassword1" placeholder="NPWP" data-inputmask='"mask": "99.999.999.9-999.999"' data-mask value="{{$penyedia->npwp}}">
                </div>
                <div class="form-group">
                  <label>Bentuk Usaha</label>
                  <select class="form-control select2bs4" style="width: 100%;" data-placeholder="Bentuk Usaha" name="bentuk_usaha">
                    <option value="" disabled  selected>Bentuk Usaha</option>
                    <option>Perseorangan</option>
                    <option value="CV">Perseroan Komanditer (CV)</option>
                    <option value="PT">Perseroan Terbatas (PT)</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Direksi (Direktur)</label>
                  <input type="text" name="direksi" class="form-control" id="exampleInputPassword1" placeholder="Nama Direktur" value="{{$penyedia->direksi}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="email" value="{{$penyedia->email}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No. Telp/HP</label>
                  <input type="text" name="telp" class="form-control" id="exampleInputPassword1" placeholder="telp" value="{{$penyedia->telp}}">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat">{{$penyedia->alamat}}</textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Latitude</label>
                        <input type="text" name="lati" class="form-control" id="exampleInputPassword1" placeholder="Lat" value="{{$penyedia->lati}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Longitude</label>
                        <input type="text" name="longi" class="form-control" id="exampleInputPassword1" placeholder="Long" value="{{$penyedia->longi}}">
                      </div>
                    </div>
                  </div>
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/datapenyedia" type="button" class="btn btn-outline-secondary">Kembali</a>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
    </section>