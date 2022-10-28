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
                        <th style="width: 120px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($penyedia as $penyedias)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$penyedias->nama}}</td>
                        <td>{{$penyedias->pekerjaans_avg_nilai_total}}</td>
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


