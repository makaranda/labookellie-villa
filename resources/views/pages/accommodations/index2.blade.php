
  @extends('layouts.app')


  @section('content')
  <!-- ================ start banner area ================= -->
  <section class="blog-banner-area" id="about">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Rooms</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ URL::to('') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Rooms</li>
        </ol>
      </nav>
            </div>
        </div>
</div>
</section>


<section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <div class="section-intro__style">
          <img src="{{ URL::to('') }}/resources/images/home/bed-icon.png" alt="">
        </div>
        <h2>Explore Our Rooms</h2>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="{{ URL::to('') }}/resources/images/home/home_rooms1.jpg" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">Rs 20000 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="{{ URL::to('') }}/rooms/room-name1">Classic Bed Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link button button--active home-banner-btn btn-outline" href="{{ URL::to('') }}/rooms/room-name3">Find Out More <i class="ti-arrow-right"></i></a>
              <a class="card-explore__link button button--active home-banner-btn" href="{{ URL::to('') }}/rooms/room-name1">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="{{ URL::to('') }}/resources/images/home/home_rooms2.jpg" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">Rs 20000 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="{{ URL::to('') }}/rooms/room-name2">Premium Room</a></h4>
              <p>Beginning fourth dominion a creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link button button--active home-banner-btn btn-outline" href="{{ URL::to('') }}/rooms/room-name3">Find Out More <i class="ti-arrow-right"></i></a>
              <a class="card-explore__link button button--active home-banner-btn" href="{{ URL::to('') }}/rooms/room-name2">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="{{ URL::to('') }}/resources/images/home/home_rooms3.jpg" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">Rs 20000 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="{{ URL::to('') }}/rooms/room-name3">Family Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link button button--active home-banner-btn btn-outline" href="{{ URL::to('') }}/rooms/room-name3">Find Out More <i class="ti-arrow-right"></i></a>
              <a class="card-explore__link button button--active home-banner-btn" href="{{ URL::to('') }}/rooms/room-name3">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('css')
    <style>
        .stu-manage-button-area{
            margin-top:50px;
            text-align: center;
        }
    </style>

@endpush
