<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/insertuser" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label>Satker</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="satker">
                    <option selected="selected">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</option>
                    <option>Badan Keuangan Daerah</option>
                    <option>Badan Penanggulangan Bencana Daerah</option>
                    <option>Badan Perencanaan Pembangunan Daerah</option>
                    <option>Dinas Kepemudaan Olahraga dan Pariwisata</option>
                    <option>Dinas Kependudukan dan Pencatatan Sipil</option>
                    <option>Dinas Komunikasi dan Informatika</option>
                    <option>Dinas Koperasi Usaha Mikro dan Perdagangan</option>
                    <option>Dinas Lingkungan Hidup</option>
                    <option>Dinas Pangan Pertanian dan Perikanan</option>
                    <option>Dinas Pekerjaan Umum dan Penataan Ruang</option>
                    <option>Dinas Penanaman Modal Tenaga Kerja dan Pelayanan Terpadu Satu Pintu</option>
                    <option>Dinas Pendidikan dan Kebudayaan</option>
                    <option>Dinas Pengendalian Penduduk Keluarga Berencana Pemberdayaan Perempuan dan Perlindungan Anak</option>
                    <option>Dinas Perhubungan</option>
                    <option>Dinas Perpustakaan</option>
                    <option>Dinas Perumahan Rakyat dan Kawasan Permukiman</option>
                    <option>Dinas Sosial</option>
                    <option>Inspektorat</option>
                    <option>Kantor Kesatuan Bangsa dan Sosial Politik</option>
                    <option>Kecamatan Pontianak Barat</option>
                    <option>Kecamatan Pontianak Kota</option>
                    <option>Kecamatan Pontianak Selatan</option>
                    <option>Kecamatan Pontianak Tenggara</option>
                    <option>Kecamatan Pontianak Timur</option>
                    <option>Kecamatan Pontianak Utara</option>
                    <option>Satuan Polisi Pamong Praja</option>
                    <option>Sekretariat Daerah</option>
                    <option>Sekretariat DPRD</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="status">
                    <option selected="selected">ppk</option>
                    <option>pp</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Username</label>
                  <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                </div>
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/datauser" type="button" class="btn btn-outline-secondary">Kembali</a>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
    </section>