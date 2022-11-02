<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/insertpenyedia" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Perusahaan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NPWP</label>
                  <input type="text" name="npwp" class="form-control" id="exampleInputPassword1" placeholder="NPWP" data-inputmask='"mask": "99.999.999.9-999.999"' data-mask>
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
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No. Telp/HP</label>
                  <input type="text" name="telp" class="form-control" id="exampleInputPassword1" placeholder="telp">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat"></textarea>
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