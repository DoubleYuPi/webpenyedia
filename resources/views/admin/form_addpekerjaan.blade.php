<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/insertpekerjaan" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Tahun Anggaran</label>
                  <select name="ta" class="form-control select2bs4" style="width: 15%;" required>
                    <option value="" disabled  selected>T.A.</option>
                    <option>
                      {{now()->subYear(1)->format('Y')}}
                    </option>
                    <option>
                      {{now()->format('Y')}}
                    </option>
                    <option>
                      {{now()->addYear()->format('Y')}}
                    </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Paket Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Kontrak</label>
                  <input type="text" name="noko" class="form-control" id="noko" placeholder="Nomor Kontrak">
                </div>
                <span id="error_noko"></span>
                <div class="form-group">
                  <label>Tanggal</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggal"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                @if(Auth::user()->status=='super')
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama PPK</label>
                  <select name="user_id" class="form-control select2bs4" style="width: 100%;">
                    @foreach ($user as $users)
                    <option value="{{$users->id}}">
                      {{$users->name}}
                    </option>
                    @endforeach
                    {{-- <option>
                      {{$users = Auth::user()->username}}
                    </option> --}}
                  </select>
                </div>
                @elseif (Auth::user()->status=='ppk')
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama PPK</label>
                  <select name="user_id" class="form-control select2bs4" style="width: 100%;">
                    
                    <option value="{{Auth::user()->id}}">
                      {{$users = Auth::user()->name}}
                    </option>
                    
                  </select>
                </div>
                @endif
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Perusahaan</label>
                  <select name="penyedia_id" class="form-control select2bs4" style="width: 100%;">
                    @foreach ($penyedia as $penyedias)
                    <option value="{{$penyedias->id}}">
                      {{$penyedias->nama}}
                    </option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Pekerjaan</label>
                  <select name="jeniskerja_id" class="form-control select2bs4" style="width: 100%;">
                    <option value="" disabled  selected>Jenis Pekerjaan</option>
                    @foreach ($jeniskerja as $jeniskerjas)
                    <option value="{{$jeniskerjas->id}}">
                      {{$jeniskerjas->nama_jenis}}
                    </option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">HPS</label>
                  <input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="hps" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai Kontrak</label>
                  <input type="number" step="0.01" name="nilai_kontrak" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan">
                </div>
                <div class="form-group">
                    <label>Lokasi</label>
                    <textarea name="lokasi" class="form-control" rows="3" placeholder="Alamat"></textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Latitude</label>
                        <input type="text" name="lati" class="form-control" id="exampleInputPassword1" placeholder="Lat">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Longitude</label>
                        <input type="text" name="longi" class="form-control" id="exampleInputPassword1" placeholder="Long">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gambar</label>
                    <input type="file" name="gambar" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan">
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/datapekerjaan" type="button" class="btn btn-outline-secondary">Kembali</a>
                <button type="submit" id="submit" class="btn btn-outline-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
    </section>