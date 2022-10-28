<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel User</h3>
  
                  <div class="card-tools">
                    <a href="/tambahuser" type="button" class="btn btn-outline-success btn-block"><i class="fa fa-plus"></i>&nbsp Tambah User</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table id="tabelpenyedia" class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">No.</th>
                        <th>Nama User</th>
                        <th>Satker</th>
                        <th>User Name</th>
                        <th>Status</th>
                        <th style="width: 120px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($user as $users)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->satker}}</td>
                        <td>{{$users->username}}</td>
                        <td>{{$users->status}}</td>
                        <td>
                            <a href="/edituser/{{$users->id}}" type="button" class="btn btn-outline-primary">Edit</a>
                            <a href="#" type="button" class="btn btn-outline-danger delete" data-id="{{$users->id}}" data-nama="{{$users->nama}}">Hapus</a>
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


