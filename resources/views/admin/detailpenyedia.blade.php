<section class="content">
  <div class="container-fluid">
    <div class="card card-default color-palette-box">
      <div class="card-header">
        <h3 class="card-title">
          <b>{{$penyedia->nama}}</b>
        </h3>
      </div>
      <div class="card-body">
        <div class="col-12">
          <h5><i class="fas fa-id-card"></i>&nbsp NPWP: {{$penyedia->npwp}}</h5><br>
          <h5><i class="fas fa-map-pin"></i>&nbsp Alamat: {{$penyedia->alamat}}</h5>
        </div>
      </div>
      <hr class="solid" style="border-top: 1px solid;">
      <div class="card-body">
        <div class="col-12">
          <h5><i class="fas fa-building"></i>&nbsp Bentuk Usaha: {{$penyedia->bentuk_usaha}}</h5><br>
          <h5><i class="fas fa-envelope"></i>&nbsp Email: {{$penyedia->email}}</h5>
        </div>
      </div>
    </div>
  </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      @foreach ($penyedia as $penyedias)
        
      @endforeach
        <div class="row">
          {{-- <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$penyedia->count('nama')}}</h3>

                <p>Penyedia</p>
              </div>
              <div class="icon">
                <i class="fas fa-store"></i>
              </div>
              <a href="/datapenyedia" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div> --}}
        <!-- ./col -->
        <div class="col-lg-6 col-8">
          <!-- small box -->
          <div class="small-box bg-lightblue">
            <div class="inner">
              <h3>{{$pekerjaan->count('pekerjaan')}}</h3>

              <p>Pekerjaan</p>
            </div>
            <div class="icon">
              <i class="fas fa-map"></i>
            </div>
            <a href="/datapekerjaan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-8">
          <!-- small box -->
          <div class="small-box bg-lightblue">
            <div class="inner">
              <h3>Rp. {{number_format($pekerjaan->sum('nilai_kontrak'))}}</h3>

              <p>Nilai Kontrak</p>
            </div>
            <div class="icon">
              <i class="fas fa-money-bill-wave"></i>
            </div>
            <a href="/datapekerjaan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </section>

@foreach ($jeniskerja as $jeniskerjas)
<section class="content">
  <div class="container-fluid">
    <div class="card card-default collapsed-card">
      <div class="card-header collapsed-card">
        <h3 class="card-title">
          <b>{{$jeniskerjas->nama_jenis}} - {{round($jeniskerjas->pekerjaans()->where('penyedia_id', $penyedia->id)->avg('nilai_total'),1)}}</b>
        </h3>
    
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body table-responsive">
        <table id="tabeldetail" class="table table-bordered display" style="width: 100%">
          <thead>
            <tr>
              <th style="width: 10px" rowspan="2">Tahun Anggaran</th>
              <th rowspan="2">Tanggal Kontrak</th>
              <th rowspan="2">Paket Pekerjaan</th>
              <th rowspan="2">Nama Perusahaan</th>
              <th rowspan="2">Lokasi Pekerjaan</th>
              <th rowspan="2">Jenis Pekerjaan</th>
              <th rowspan="2">HPS</th>
              <th rowspan="2">Nilai</th>
              <th rowspan="2">Kriteria</th>
              <th rowspan="2">Dokumen</th>
              <th colspan="2">Tanggal</th>
            </tr>

            <tr>
              <td>Tgl Buat</td>
              <td>Tgl Update</td>
            </tr>
          </thead>
          <tbody>
            @php $no = 1; /*$totalNilai = 0.0;*/ @endphp
            @foreach ($jeniskerjas->pekerjaans()->where('penyedia_id', $penyedia->id)->get() as $pekerjaans)
            <tr>
              <td>{{$pekerjaans->ta}}</td>
              <td>{{$pekerjaans->tanggal->format('d/m/Y')}}</td>
              <td>{{$pekerjaans->pekerjaan}}</td>
              <td>{{$pekerjaans->penyedia->nama}}</td>
              <td>{{$pekerjaans->lokasi}}</td>
              <td>{{$pekerjaans->jeniskerja->nama_jenis}}</td>
              <td>Rp. {{number_format($pekerjaans->hps,0,',',',')}}</td>
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
              <td>
                 
              </td>
              <td>
                
                
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endforeach
