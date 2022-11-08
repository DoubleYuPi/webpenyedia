<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel Pekerjaan</h3>
                  <br>
                  <div class="card-tools">
                    <a href="/tambahpekerjaan" type="button" class="btn btn-outline-success btn-block"><i class="fa fa-plus"></i>&nbsp; Tambah Pekerjaan</a>
                  </div>

                  <div id="tahun" class="col-md-2">
                      {{-- <select id="filter-tahun" class="form-control filter">
                        <option value="">Pilih Tahun</option>
                        @foreach ($pekerjaan as $pekerjaans)
                          <option value="{{$pekerjaans->tanggal}}">{{$pekerjaans->tanggal->format('Y')}}</option>
                        @endforeach
                      </select> --}}
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table id="tabelpekerjaan" class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">Tahun Anggara</th>
                        <th>Paket Pekerjaan</th>
                        <th>Tanggal Kontrak</th>
                        <th>Nama Perusahaan</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Lokasi Pekerjaan</th>
                        <th>HPS</th>
                        <th>Nilai Kontrak</th>
                        <th>Gambar</th>
                        <th style="width: 120px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($pekerjaan as $pekerjaans)
                      <tr>
                        <td>{{$pekerjaans->tanggal->format('Y')}}</td>
                        <td>{{$pekerjaans->pekerjaan}}</td>
                        <td>{{$pekerjaans->tanggal->format('d/m/Y')}}</td>
                        <td>{{$pekerjaans->penyedia->nama}}</td>
                        <td>{{$pekerjaans->jenis_pekerjaan}}</td>
                        <td>{{$pekerjaans->lokasi}}</td>
                        {{-- <td>{{$pekerjaans->user->name}}</td> --}}
                        <td>Rp. {{number_format($pekerjaans->hps,0,',',',')}}</td>
                        <td>Rp. {{number_format($pekerjaans->nilai_kontrak,0,',',',')}}</td>
                        <td>
                          <img src="{{asset('gambarpekerjaan/'.$pekerjaans->gambar)}}" style="width: 100px"alt="">
                        </td>
                        <td>
                            @if (Auth::user()->status=='super')
                              <a href="/editpekerjaan/{{$pekerjaans->id}}" type="button" class="btn btn-outline-primary">Edit</a>
                              <a href="#" type="button" class="btn btn-outline-danger delete" data-id="{{$pekerjaans->id}}" data-nama="{{$pekerjaans->pekerjaan}}">Hapus</a>
                            @else
                            <a href="/editpekerjaan/{{$pekerjaans->id}}" type="button" class="btn btn-outline-primary btn-block">Edit</a>
                              
                            @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
            
    </div>
</section>


