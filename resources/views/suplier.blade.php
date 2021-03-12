@extends('layouts.app')
@section('content')
<!-- suplier -->
<section class="suplier section-padding">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">
        <h1 class="mb-4" data-aos="fade-up">suplier Kami</h1>
      </div>

      @foreach($suplier as $suplier)
      <div class="col-xl-4 col-sm-12 mt-5">
        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-truncate">
              <span>{{$suplier->namaSUP}}</span>
            </h3>
            <h3 class="text-truncate">
              <span>{{$suplier->alamat}}</span>
            </h3>
          <!-- </div> -->
        </div>
      </div>
      @endforeach

    </div>
</section>
@endsection