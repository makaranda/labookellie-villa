
  @extends('layouts.app')


  @section('content')
  <!-- ================ start banner area ================= -->
  <section class="blog-banner-area" id="about">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>About Us</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ URL::to('') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About us</li>
        </ol>
      </nav>
            </div>
        </div>
</div>
</section>

	<!-- ================ welcome section start ================= -->
    <section class="welcome pt-0 section-margin">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="row no-gutters welcome-images">
                  <div class="col-sm-7">
                    <div class="card">
                      <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc01.jpg" alt="Card image cap">
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="card">
                      <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc02.jpg" alt="Card image cap">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="card">
                      <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc03.jpg" alt="Card image cap">
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-lg-7">
              <div class="welcome-content">
                <h2 class="mb-4"><span class="d-block">Welcome</span> to our residence</h2>
                <p>Beginning blessed second a creepeth. Darkness wherein fish years good air whose after seed appear midst evenin, appear void give third bearing divide one so blessed moved firmament gathered </p>
                <p>Beginning blessed second a creepeth. Darkness wherein fish years good air whose after seed appear midst evenin, appear void give third bearing divide one so blessed</p>

              </div>
            </div>
            <div class="col-lg-12">
              <div class="welcome-content pl-0 mt-4">
                <p>Beginning blessed second a creepeth. Darkness wherein fish years good air whose after seed appear midst evenin, appear void give third bearing divide one so blessed moved firmament gathered </p>
                <p>Beginning blessed second a creepeth. Darkness wherein fish years good air whose after seed appear midst evenin, appear void give third bearing divide one so blessed</p>
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
