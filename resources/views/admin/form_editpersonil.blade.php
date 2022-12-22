<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/updatepersonil/{{$personil->id}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Personil" value="{{$personil->nama}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="text" name="lahirtgl" class="form-control" id="exampleInputPassword1" data-inputmask='"mask": "9999-99-99"' data-mask value="{{$personil->lahirtgl}}">
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
                  <label for="exampleInputPassword1">Pengalaman</label>
                  <input type="text" name="pengalaman" class="form-control" id="exampleInputPassword1" placeholder="Pengalaman" value="{{$personil->pengalaman}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Keahlian</label>
                  <input type="text" name="keahlian" class="form-control" id="exampleInputPassword1" placeholder="Keahlian" value="{{$personil->keahlian}}">
                </div>            
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/datapersonil" type="button" class="btn btn-outline-secondary">Kembali</a>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
    </section>