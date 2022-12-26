<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel Penilaian Penyedia</h3>
                  
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table id="tabelpenyedia" class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">No.</th>
                        <th>Nama Penyedia</th>
                        <th>Nilai</th>
                        <th>Kriteria</th>
                        <th style="width: 120px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($penyedia as $penyedias)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$penyedias->nama}}</td>
                        <td>{{round($penyedias->pekerjaans()->avg('nilai_total'),1)}}</td>
                        @if(($penyedias->pekerjaans()->avg('nilai_total') < '0'))
                        <td>N/A</td>
                        @elseif($penyedias->pekerjaans()->avg('nilai_total') == '0' || $penyedias->pekerjaans()->avg('nilai_total') <= '1')
                        <td>Buruk</td>
                        @elseif($penyedias->pekerjaans()->avg('nilai_total') == '1' || $penyedias->pekerjaans()->avg('nilai_total') <= '2')
                        <td>Cukup</td>
                        @elseif($penyedias->pekerjaans()->avg('nilai_total') == '2' || $penyedias->pekerjaans()->avg('nilai_total') <= '3')
                        <td>Baik</td>
                        @elseif($penyedias->pekerjaans()->avg('nilai_total') == '3')
                        <td>Sangat Baik</td>
                        @endif
                        <td>
                            <a href="/nilaipekerjaan/{{$penyedias->id}}" type="button" class="btn btn-primary btn-block btn-outline-primary">Detail</a>
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


