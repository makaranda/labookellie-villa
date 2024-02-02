
<header class="header_area">
    <div class="header-top">
      <div class="container">
        <div class="d-flex align-items-center">
          <div id="logo">
            <a href="{{ URL::to('') }}"><img src="{{ URL::to('') }}/resources/images/main_logo.png" alt="" title="" /></a>
          </div>
          <div class="ml-auto d-none d-md-block d-md-flex">
            <div class="media header-top-info">
              <span class="header-top-info__icon"><i class="fas fa-phone-volume"></i></span>
              <div class="media-body">
                <p>Have any question?</p>
                <p>Hotline: <a href="tel:+94777123456">+777 123 456</a></p>
              </div>
            </div>
            <div class="media header-top-info">
              <span class="header-top-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <p>Have any question?</p>
                <p>Email: <a href="mailto:info@labookellievilla.com">info@labookellievilla.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <!-- <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav">
              <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ URL::to('') }}">Home</a></li>
              <li class="nav-item {{ request()->is('about-us') ? 'active' : '' }}"><a class="nav-link" href="{{ URL::to('') }}/about-us">About us</a></li>
              <li class="nav-item {{ request()->is('rooms') ? 'active' : '' }}"><a class="nav-link" href="{{ URL::to('') }}/rooms">Rooms</a></li>
              <li class="nav-item {{ request()->is('gallery') ? 'active' : '' }}"><a class="nav-link" href="{{ URL::to('') }}/gallery">Gallery</a></li>
              <li class="nav-item {{ request()->is('contact-us') ? 'active' : '' }}"><a class="nav-link" href="{{ URL::to('') }}/contact-us">Contact us</a></li>
            </ul>
          </div>

          <ul class="social-icons ml-auto">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </nav>

      <!-- <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here">
            <button type="submit" class="btn"></button>
            <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
          </form>
        </div>
      </div> -->
    </div>
	</header>
