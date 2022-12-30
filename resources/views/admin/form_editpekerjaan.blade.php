<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/updatepekerjaan/{{$pekerjaan->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahun Anggaran</label>
                    <select name="ta" class="form-control select2bs4" style="width: 15%;">
                      <option value="" disabled >T.A.</option>
                      <option {{ $pekerjaan->ta == now()->format('Y') ? 'selected':'' }}>
                        {{now()->format('Y')}}
                      </option>
                      <option>
                        {{now()->addYear()->format('Y')}}
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Paket Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan" value="{{$pekerjaan->pekerjaan}}">
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggal" value="{{$pekerjaan->tanggal}}"/>
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
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
                        <option value="{{$pekerjaan->penyedia->id}}">
                          {{$pekerjaan->penyedia->nama}}
                        </option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Pekerjaan</label>
                    <select name="jeniskerja_id" class="form-control select2bs4" style="width: 100%;">
                      @foreach ($jeniskerja as $jeniskerjas)
                      <option value="{{$jeniskerjas->id}}" {{ $pekerjaan->jeniskerja_id == $jeniskerjas->id ? 'selected' : '' }}>
                        {{$jeniskerjas->nama_jenis}}
                      </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">HPS</label>
                    <input type="number" step=".01" name="hps" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan" value="{{$pekerjaan->hps}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nilai Kontrak</label>
                    <input type="number" step=".01" name="nilai_kontrak" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan" value="{{$pekerjaan->nilai_kontrak}}">
                  </div>
                  <div class="form-group">
                      <label>Lokasi</label>
                      <textarea name="lokasi" class="form-control" rows="3" placeholder="Alamat">{{$pekerjaan->lokasi}}</textarea>
                  </div>
                  <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Latitude</label>
                          <input type="text" name="lati" class="form-control" id="exampleInputPassword1" placeholder="Lat" value="{{$pekerjaan->lati}}">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Longitude</label>
                          <input type="text" name="longi" class="form-control" id="exampleInputPassword1" placeholder="Long" value="{{$pekerjaan->longi}}">
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
                <button type="submit" class="btn btn-outline-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
    </section>