<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  @if (Auth::user()->status=='super')
                  <h3 class="card-title"><b>{{$penyedia->nama}}</b></h3> <br>
               
                  <h3 class="card-title">Nilai Total: <b>{{round(($totalAvg),1)}}</b></h3> 
                  @else
                  <h3 class="card-title"><b></b></h3> <br>
               
                  <h3 class="card-title"></b></h3>
                  @endif
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table id="tabelpekerjaan" class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px" rowspan="2">Tahun Anggaran</th>
                        <th rowspan="2">Tanggal Kontrak</th>
                        <th rowspan="2">Paket Pekerjaan</th>
                        <th rowspan="2">Nama Perusahaan</th>
                        <th rowspan="2">Personil Manajerial</th>
                        <th rowspan="2">Jenis Pekerjaan</th>
                        <th rowspan="2">HPS</th>
                        <th rowspan="2">Nilai</th>
                        <th rowspan="2">Dokumen</th>
                        <th colspan="2">Aksi</th>
                      </tr>

                      <tr>
                        <td>Dokumen</td>
                        <td>Nilai</td>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; /*$totalNilai = 0.0;*/ @endphp
                      @foreach ($pekerjaan as $pekerjaans)
                      <tr>
                        <td>{{$pekerjaans->ta}}</td>
                        <td>{{$pekerjaans->tanggal->format('d/m/Y')}}</td>
                        <td>{{$pekerjaans->pekerjaan}}</td>
                        <td>{{$pekerjaans->penyedia->nama}}</td>
                        <td>{{$pekerjaans->personil->nama ?? ''}}</td>
                        <td>{{$pekerjaans->jeniskerja->nama_jenis}}</td>
                        <td>Rp. {{number_format($pekerjaans->hps,0,',',',')}}</td>
                        @php
                        $pekerjaans->nilai_total = $pekerjaans->nilai_1 + $pekerjaans->nilai_2 + $pekerjaans->nilai_3 + $pekerjaans->nilai_4;
                        @endphp
                        <td>{{$pekerjaans->nilai_total}}</td>
                        <td><a href="{{ route('pekerjaans.download', $pekerjaans->id) }}"><u>{{$pekerjaans->status}}</u></a></td>
                        <td>
                          <a href="/bahp/{{$pekerjaans->id}}" type="button" class="btn btn-outline-primary">Upload</a>
                        </td>
                        <td>
                          {{-- <a href="/nilai/{{$pekerjaans->id}}" type="button" class="btn btn-outline-primary @disabled(is_null($pekerjaans->bahp))">Penilaian</a> --}} <!--SHORT VER-->
                            @if (is_null($pekerjaans->bahp) || $pekerjaans->status=='Surat Pemutusan Kontrak Karena Kesalahan Penyedia')
                            <a href="/nilai/{{$pekerjaans->id}}" type="button" class="btn btn-outline-secondary disabled">Penilaian</a>
                            @else
                            <a href="/nilai/{{$pekerjaans->id}}" type="button" class="btn btn-outline-primary">Penilaian</a>
                            @endif <!--LONG VERSION-->
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              @if (Auth::user()->status=='super')
              <div class="card-footer">
                
                <a href="/datanilai_penyedia" type="button" class="btn btn-outline-secondary">Kembali</a>
                
              </div>
              @endif
            
    </div>
</section>


