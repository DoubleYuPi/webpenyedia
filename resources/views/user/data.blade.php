<div class="page-section counter-section">
    <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="subhead">{{$ldate = date('Y-m-d')}}</div>
          <h2 class="title-section">Overview <span class="marked">Data</span></h2>
          <div class="divider mx-auto"></div>
    </div>
    @foreach ($transaksi as $transaksis)
        
    @endforeach

    @foreach ($penyedia as $penyedias)
        
    @endforeach
    <div class="container">
      <div class="row align-items-center text-center">
        <div class="col-lg-4">
          <p>Jumlah Penyedia</p>
          <h2><span class="number" data-number="{{$penyedia->count('nama')}}"></span></h2>
        </div>
        <div class="col-lg-4">
          <p>Jumlah Pekerjaan</p>
          <h2><span class="number" data-number="{{$pekerjaan->count('pekerjaan')}}"></span></h2>
        </div>
        <div class="col-lg-4">
          <p>Total HPS</p>
          <h2>Rp<span class="number" data-number="{{$pekerjaan->sum('hps')}}"></span></h2>
        </div>
      </div>
    </div> <!-- .container -->

</div> <!-- .page-section -->