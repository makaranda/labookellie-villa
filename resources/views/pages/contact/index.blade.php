
  @extends('layouts.app')


  @section('content')
  <!-- ================ start banner area ================= -->
  <section class="blog-banner-area" id="about">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Contact Us</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ URL::to('') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact us</li>
        </ol>
      </nav>
            </div>
        </div>
</div>
</section>

<section class="section-margin">
    <div class="container">
      <!-- google map start -->
      <div class="col-12 col-md-12">
        {{-- @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif --}}
        @if ($message = Session::get('success'))
            <div class="alert alert-success  alert-dismissible">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger  alert-dismissible">
                <strong>{{ $message }}</strong>
            </div>
        @endif
      </div>
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 420px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1979.930557220459!2d80.71727483444144!3d7.025606729441807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1706783883110!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


      </div>
      <!-- google map end -->


      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Labookellie Villa</h3>
              <p>Santa monica bullevard</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
            <div class="media-body">
              <h3><a href="tel:777123456">+(94) 777 123 456</a></h3>
              <p>Mon-Sun: (24/7)</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:info@labookellievilla.com">info@labookellievilla.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">
          <form class="row contact_form" action="{{ route('contact.send') }}" method="post" id="contactForm"
              novalidate="novalidate">
              @csrf
              <div class="col-md-6">
                  <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name">
                      @if($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                      @endif
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter email address">
                      @if($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                      @endif
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Enter Subject">
                      @if($errors->has('subject'))
                            <small class="text-danger">{{ $errors->first('subject') }}</small>
                      @endif
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <textarea class="form-control different-control" name="message" id="message" rows="5" placeholder="Enter Message">{{ old('message') }}</textarea>
                      @if($errors->has('message'))
                            <small class="text-danger">{{ $errors->first('message') }}</small>
                      @endif
                  </div>
              </div>
              <div class="col-md-12 text-right">
                <div class="row">
                    <div class="col-12 col-md-6"></div>
                    <div class="col-12 col-md-6">
                        {!! htmlFormSnippet() !!}
                        @if($errors->has('g-recaptcha-response'))
                            <div class="text-left">
                                <small class="text-danger">{{ $errors->first('g-recaptcha-response') }}</small>
                            </div>
                        @endif
                    </div>
                    <div class="col-12 col-md-12 mt-3">
                        <button type="submit" value="submit" class="button-contact"><span>Send Message</span></button>
                    </div>
                </div>
              </div>
          </form>
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
