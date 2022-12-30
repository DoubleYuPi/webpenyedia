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
                        <th style="width: 10px">Tahun Anggaran</th>
                        <th>Paket Pekerjaan</th>
                        <th>Tanggal Kontrak</th>
                        <th>Nama Perusahaan</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Lokasi Pekerjaan</th>
                        <th>Personil Manajerial</th>
                        <th>HPS</th>
                        <th>Nilai Kontrak</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th style="width: 120px">Aksi</th>
                        <th>Personil</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($pekerjaan as $pekerjaans)
                      <tr>
                        <td>{{$pekerjaans->ta}}</td>
                        <td>{{$pekerjaans->pekerjaan}}</td>
                        <td>{{$pekerjaans->tanggal->format('d/m/Y')}}</td>
                        <td><a href="/profilpenyedia/{{$pekerjaans->penyedia->id}}">{{$pekerjaans->penyedia->nama}}</a></td>
                        <td>{{$pekerjaans->jeniskerja->nama_jenis}}</td>
                        <td>{{$pekerjaans->lokasi}}</td>
                        {{-- <td>{{$pekerjaans->user->name}}</td> --}}
                        {{-- @if (is_null($pekerjaans->personil->nama))
                          <td></td>
                        @else
                          <td>{{$pekerjaans->personil->nama}}</td>
                        @endif --}}
                        <td><a href="">{{$pekerjaans->personil->nama ?? 'N/A'}}</a></td>
                        <td>Rp. {{number_format($pekerjaans->hps,0,',',',')}}</td>
                        <td>Rp. {{number_format($pekerjaans->nilai_kontrak,0,',',',')}}</td>
                        <td>
                          <img src="{{asset('gambarpekerjaan/'.$pekerjaans->gambar)}}" style="width: 100px"alt="">
                        </td>
                          @if (is_null($pekerjaans->bahp))
                            <td class="text-warning">Dalam proses pekerjaan</td>
                          @else
                            <td class="text-success">Pekerjaan Selesai</td>
                          @endif
                        <td>
                            @if (Auth::user()->status=='super')
                              <a href="/editpekerjaan/{{$pekerjaans->id}}" type="button" class="btn btn-outline-primary">Edit</a>
                              <a href="#" type="button" class="btn btn-outline-danger delete" data-id="{{$pekerjaans->id}}" data-nama="{{$pekerjaans->pekerjaan}}">Hapus</a>
                            @else
                            <a href="/editpekerjaan/{{$pekerjaans->id}}" type="button" class="btn btn-outline-primary btn-block">Edit</a>
                              
                            @endif
                        </td>
                        <td><a href="/tambahpersonil/{{$pekerjaans->id}}" type="button" class="btn btn-outline-success btn-block">Tambah</a></td>
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


