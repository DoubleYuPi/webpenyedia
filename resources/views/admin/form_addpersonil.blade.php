<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/insertpersonil" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Personil">
                  <span id="error_nama"></span>
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="lahirtgl" data-inputmask='"mask": "9999-99-99"' data-mask/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label>Pendidikan</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="pendidikan">
                    <option value="" disabled  selected>Pendidikan</option>
                    <option>SMA</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                    <option>D3</option>
                    <option value="lain">Lainnya</option>
                    {{-- @if ($_POST['pendidikan'] === 'lain')
                    <input type="text" name="pendidikan" class="form-control" id="exampleInputEmail1" placeholder="Lainnya">
                    @endif --}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pengalaman</label>
                  <input type="text" name="pengalaman" class="form-control" id="exampleInputEmail1" placeholder="Pengalaman">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Keahlian</label>
                  <input type="text" name="keahlian" class="form-control" id="exampleInputEmail1" placeholder="Keahlian">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/datapersonil" type="button" class="btn btn-outline-secondary">Kembali</a>
                <button type="submit" id="submit" class="btn btn-outline-primary">Submit</button>
              </div>
              {{ csrf_field() }}
            </form>
          </div>
        </div>
    </section>