<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel Penyedia</h3>
  
                  <div class="card-tools">
                    <a href="/tambahpenyedia" type="button" class="btn btn-outline-success btn-block"><i class="fa fa-plus"></i>&nbsp Tambah Penyedia</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table id="tabelpenyedia" class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">No.</th>
                        <th>Nama Penyedia</th>
                        <th>NPWP</th>
                        <th>Email</th>
                        <th>No. Telp/HP</th>
                        <th>Alamat</th>
                        <th style="width: 120px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($penyedia as $penyedias)
                      <tr>
                        <td>{{$no++}}</td>
                        <td><a href="/profilpenyedia/{{$penyedias->id}}">{{$penyedias->nama}}</a></td>
                        <td>{{$penyedias->npwp}}</td>
                        <td>{{$penyedias->email}}</td>
                        <td>{{$penyedias->telp}}</td>
                        <td>{{$penyedias->alamat}}</td>
                        <td>
                            <a href="/editpenyedia/{{$penyedias->id}}" type="button" class="btn btn-outline-primary">Edit</a>
                            <a href="#" type="button" class="btn btn-outline-danger delete" data-id="{{$penyedias->id}}" data-nama="{{$penyedias->nama}}">Hapus</a>
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


