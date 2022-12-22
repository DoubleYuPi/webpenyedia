<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel Personil</h3>
  
                  <div class="card-tools">
                    <a href="/personilbaru" type="button" class="btn btn-outline-success btn-block"><i class="fa fa-plus"></i>&nbsp Tambah Personil</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table id="tabelpenyedia" class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">No.</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan</th>
                        <th>Pengalaman</th>
                        <th>Keahlian</th>
                        <th>Status</th>
                        <th style="width: 120px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($personil as $personils)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$personils->nama}}</a></td>
                        <td>{{$personils->lahirtgl}}</td>
                        <td>{{$personils->pendidikan}}</td>
                        <td>{{$personils->pengalaman}}</td>
                        <td>{{$personils->keahlian}}</td>
                        @if ($personils->status == 'tersedia')
                          <td class="text-success">Tersedia</td>
                        @elseif($personils->status == 'tdkTersedia')
                          <td>Sedang bekerja pada pekerjaan <b>{{$personils->pekerjaans->pekerjaan}}</b></td>
                        @endif
                        
                        <td>
                            <a href="/editpersonil/{{$personils->id}}" type="button" class="btn btn-outline-primary">Edit</a>
                            <a href="#" type="button" class="btn btn-outline-danger delete" data-id="{{$personils->id}}" data-nama="{{$personils->nama}}">Hapus</a>
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


