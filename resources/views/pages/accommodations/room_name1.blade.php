
@extends('layouts.app')


@section('content')
<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="about">
  <div class="container h-100">
      <div class="blog-banner">
          <div class="text-center">
              <h1>Room Name</h1>
              <nav aria-label="breadcrumb" class="banner-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ URL::to('') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ URL::to('') }}/rooms">Rooms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Room Name</li>
      </ol>
    </nav>
          </div>
      </div>
</div>
</section>


<section class="section-margin">
  <div class="container">
    <div class="row">
        <div class="col-12 col-md-7 mb-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 mt-0">
                    <div class="row justify-content-center">

                        <div class="order-2 order-sm-1 order-md-1 col-md-3 col-lg-3 pt-2">
                            <div class="thumbnails mt-0">
                                <a id="carousel-selector-0" data-bs-slide-to="0" data-bs-target="#custCarousel">
                                    <img src="https://i.imgur.com/weXVL8M.jpg" class="img-fluid">
                                </a>
                                <a id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#custCarousel">
                                    <img src="https://i.imgur.com/Rpxx6wU.jpg" class="img-fluid">
                                </a>
                                <a id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#custCarousel">
                                    <img src="https://i.imgur.com/83fandJ.jpg" class="img-fluid">
                                </a>
                                <a id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#custCarousel">
                                    <img src="https://i.imgur.com/JiQ9Ppv.jpg" class="img-fluid">
                                </a>
                                <a id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#custCarousel">
                                    <img src="https://i.imgur.com/JiQ9Ppv.jpg" class="img-fluid">
                                </a>
                                <a id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#custCarousel">
                                    <img src="https://i.imgur.com/JiQ9Ppv.jpg" class="img-fluid">
                                </a>
                                <a id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#custCarousel">
                                    <img src="https://i.imgur.com/JiQ9Ppv.jpg" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="order-1 order-sm-2 order-md-2 col-md-9 col-lg-9 pt-2 pl-0 pr-0">
                            <div id="custCarousel" class="carousel slide" data-bs-ride="carousel" align="center">
                                <!-- slides -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://i.imgur.com/weXVL8M.jpg" alt="Hills">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i.imgur.com/Rpxx6wU.jpg" alt="Hills">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i.imgur.com/83fandJ.jpg" alt="Hills">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i.imgur.com/JiQ9Ppv.jpg" alt="Hills">
                                    </div>
                                </div>

                                <!-- Left right -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#custCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#custCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div></>
        </div>
        <div class="col-12 col-md-5 mb-4">
            <h4 class="mb-3 mt-3 theme-font-b">ROOM NAME </h4>
            <h6 class="mb-3 theme-font-b">Bathroom | Hot Water | Heater | Living Area</h6>
            <h4 class="product-inside-cash-price-new theme-font-b">Rs. <span class="product-price">75,400</span></h4>
            <p class="mb-3 text-justify theme-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <a class="card-explore__link button button--active home-banner-btn" href="{{ URL::to('') }}/rooms/room-name3">Book Now <i class="ti-arrow-right"></i></a>
        </div>
        <div class="col-12 col-md-12 mb-4 mt-5">
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active border-bottom theme-font-b" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link border-bottom theme-font-b" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link border-bottom theme-font-b" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                </li>
            </ul>
                <div class="tab-content border" id="myTabContent">
                    <div class="tab-pane fade p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <p class="theme-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                        <p class="theme-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="tab-pane fade p-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">ddd</div>
                    <div class="tab-pane fade p-3" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">sss</div>
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
  <link rel="stylesheet" href="{{ URL::to('') }}/resources/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ URL::to('') }}/resources/css/owl.theme.default.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ URL::to('') }}/resources/js/owl.carousel.js"></script>
    <script>

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        autoplay:true,
        dots: false,
        nav: true,
        navElement: true,
        autoplayTimeout:5000,
        pagination: false,
        autoplayHoverPause:true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:5,
                loop:true
            }
        }
    });
    </script>
@endpush
