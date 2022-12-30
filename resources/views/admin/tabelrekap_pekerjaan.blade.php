  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rekap Data Pekerjaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rekap</li>
              <li class="breadcrumb-item active">Rekap Pekerjaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rekap Data Pekerjaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabelpekerjaan" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px" rowspan="2">Tahun Anggaran</th>
                      <th rowspan="2">Tanggal Kontrak</th>
                      <th rowspan="2">Paket Pekerjaan</th>
                      <th rowspan="2">Nama Perusahaan</th>
                      <th rowspan="2">Personil Manajerial</th>
                      <th rowspan="2">Jenis Pekerjaan</th>
                      <th rowspan="2">Nilai Kontrak</th>
                      <th colspan="4">Nilai</th>
                      <th rowspan="2">Nilai Total</th>
                      <th rowspan="2">Kriteria</th>
                      <th rowspan="2">Dokumen</th>
                    </tr>

                    <tr>
                      <td>Kualitas dan Kuantitas (30%)</td>
                      <td>Layanan (komunukasi & respon) (20%)</td>
                      <td>Waktu (ketepatan) (30%)</td>
                      <td>Biaya (kemampuan pengendalian biaya) (20%)</td>
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
                      <td>{{$pekerjaans->personil->nama ?? 'N/A'}}</td>
                      <td>{{$pekerjaans->jeniskerja->nama_jenis}}</td>
                      <td>Rp. {{number_format($pekerjaans->nilai_kontrak,0,',',',')}}</td>
                      <td>{{$pekerjaans->nilai_1}}</td>
                      <td>{{$pekerjaans->nilai_2}}</td>
                      <td>{{$pekerjaans->nilai_3}}</td>
                      <td>{{$pekerjaans->nilai_4}}</td>
                      @php
                      $pekerjaans->nilai_total = $pekerjaans->nilai_1 + $pekerjaans->nilai_2 + $pekerjaans->nilai_3 + $pekerjaans->nilai_4;
                      @endphp
                      <td>{{$pekerjaans->nilai_total}}</td>
                      @if (is_null($pekerjaans->bahp))
                      <td>N/A</td>
                      @elseif($pekerjaans->nilai_total == '0' || $pekerjaans->nilai_total <= '1' || $pekerjaans->status=='Surat Pemutusan Kontrak Karena Kesalahan Penyedia')
                      <td>Buruk</td>
                      @elseif($pekerjaans->nilai_total == '1' || $pekerjaans->nilai_total <= '2')
                      <td>Cukup</td>
                      @elseif($pekerjaans->nilai_total == '2' || $pekerjaans->nilai_total <= '3')
                      <td>Baik</td>
                      @elseif($pekerjaans->nilai_total == '3')
                      <td>Sangat Baik</td>
                      @endif
                      <td><a href="{{ route('pekerjaans.download', $pekerjaans->id) }}"><u>{{$pekerjaans->status}}</u></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->