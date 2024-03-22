
@extends('layouts.app')


@section('content')

    <!-- ================ start banner area ================= -->
    <section class="home-banner-area1 main-paralex-area" id="home">
      <div class="container h-100">
        <!--<div class="home-banner">
          <div class="text-center">
            <h4>See What a Difference a stay makes</h4>
            <h1>Luxury <em>is</em> personal</h1>
            <a class="button home-banner-btn" href="#">Book Now</a>
          </div>
        </div>-->
        <div class="main-paralex-banner">
            <img src="{{ URL::to('') }}/resources/images/home/main_slider_image.jpg" class="img-fuild main-paralex-image"/>
        </div>
      </div>
    </section>
    <!-- ================ end banner area ================= -->

    <!-- ================ start banner form ================= -->
    <!-- <form class="form-search form-search-position">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 gutters-19">
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Enter your keywords.." required>
            </div>
          </div>
          <div class="col-lg-6 gutters-19">
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <div class="form-select-custom">
                    <select name="" id="">
                      <option value="" disabled selected>Arrival</option>
                      <option value="8 AM">8 AM</option>
                      <option value="12 PM">12 PM</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm gutters-19">
                <div class="form-group">
                  <div class="form-select-custom">
                    <select name="" id="">
                      <option value="" disabled selected>Number of room</option>
                      <option value="8 AM">8 AM</option>
                      <option value="12 PM">12 PM</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm gutters-19">
            <div class="form-group">
              <div class="form-select-custom">
                <select name="" id="">
                  <option value="" disabled selected>Departure</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm gutters-19">
            <div class="form-group">
              <div class="form-select-custom">
                <select name="" id="">
                  <option value="" disabled selected>Adult</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm gutters-19">
            <div class="form-group">
              <div class="form-select-custom">
                <select name="" id="">
                  <option value="" disabled selected>Child</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-lg-4 gutters-19">
            <div class="form-group">
              <button class="button button-form" type="submit">Check Availability</button>
            </div>
          </div>
        </div>
      </div>
    </form>
     -->
    <!-- ================ end banner form ================= -->
    
    <section class="section-margin mb-5 pb-5 mt-5 pt-3">
      <div class="container">
        <div class="section-intro text-center pb-5">
          <div class="section-intro__style pt-5">
            <img src="{{ URL::to('') }}/resources/images/home/bed-icon.png" alt="">
          </div>
          <div class="main-title-area">
              <div class="d-none d-sm-block main-title-left-line main-title-lines"></div>
              <h3 class="main-sub-title">Tea Estate Bungalow</h3>
              <h3 class="d-block d-sm-none main-sub-title2">Tea Estate Bungalow</h3>
              <div class="d-none d-sm-block main-title-right-line main-title-lines"></div>
          </div>
          
              <h2>Welcome to Labookellie Villa</h2>
          
        </div>

        <div class="row">
          <div class="col-md-12 col-lg-12 mb-4 mb-lg-0">
             <p>Nestled within the lush embrace of Labookellie Estate in Nuwara Eliya, Labookellie Villa beckons you to step into a bygone era. Meticulously restored to its original glory, this classical colonial tea planter's bungalow emanates timeless elegance. Whether you seek a family getaway or a gathering with friends, our villa promises a warm and cozy retreat amidst the enchanting misty hills of Sri Lanka <span id="dots">...</span></p>   
          </div>
          <div class="col-md-12 col-lg-12 mb-4 mb-lg-0" id="section1_more">
             <p>Embark on an extraordinary journey into the heart of Sri Lanka's allure at Labookellie Villa. Nestled within the Labookellie tea plantation, our villa extends a gracious invitation to savor each moment—a chance to immerse yourself in the captivating beauty and storied history of the Labookellie tea estate. Poised at a lofty elevation of 1,538 meters (5,046 feet) above sea level in the tranquil Nuwara Eliya, Labookellie Villa serves as your gateway to an authentic escape, a sanctuary of tranquility embraced by the lush landscapes of the Labookellie tea plantation.</p> 
             <p>One captivating aspect is Labookellie's esteemed guardianship of more than 5,000 hectares of flourishing tea plantations, meticulously spread across the key tea-growing regions in Sri Lanka. From the low-lying valleys of Sabaragamuwa to the elevated central hills, where elevations exceed 1,500 meters, Labookellie Villa stands as a vibrant testament to the rich tapestry of Sri Lanka's illustrious tea heritage.</p>
             <p>Conveniently situated near the historic Labookallie Tea Centre, this venerable establishment is positioned along the Peradeniya-Badulla-Chenkaladi Highway in Nuwara Eliya.</p>
             <p>Discover the splendor of Labookellie Villa, where each visit is an opportunity to create cherished memories amidst the unparalleled beauty and history of Sri Lanka's tea country.</p>
          </div>
          <div id="" class="col-md-12 col-lg-12 text-center">
              <button type="button" class="button button--active home-banner-btn mt-4" id="readMoreBtn">Read more</button>
          </div>
        </div>
        <!--
        <div class="row justify-content-center mt-5 destinations-list-area">
            <div class="col-12 col-sm-3 text-center d-grid">
               <h3>15</h3><span>Mins</span><p>To Kandy City</p> 
            </div>
            <div class="col-12 col-sm-3 text-center d-grid">
               <h3>2</h3><span>Hrs</span><p>To Knuckles</p>
            </div>
            <div class="col-12 col-sm-3 text-center d-grid">
               <h3>3</h3><span>Hrs</span><p>To Colombo</p> 
            </div>
        </div>-->
        
      </div>
    </section>  

    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-3 pt-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="row no-gutters welcome-images">
              <!--<div class="col-sm-7">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc01.jpg" alt="Card image cap">
                </div>
              </div>
              <div class="col-sm-5">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc02.jpg" alt="Card image cap">
                </div>
              </div>-->
              <div class="col-lg-12">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/labookelie_section_img.jpg" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="welcome-content">
              <div class="section-top-sub-title-area">
                  <h3 class="d-none d-sm-block section-top-sub-title">Sub Heading Area</h3>
                  <div class="d-none d-sm-block section-top-sub-title-line"></div>
                  <h3 class="d-block d-sm-none section-top-sub-title2 mb-0 pl-2">Sub Heading Area</h3>
              </div>    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Breathtaking Views</span>
              </h2>
              <!--<h4>Labookellie Villa Unveils Breathtaking Views of Labookellie Tea Plantation</h4>-->
              <p>Labookellie Villa is thoughtfully situated to offer an iconic perspective of the Labookellie Tea plantation. Awaken to the enchanting vista of Labookellie tea plantation, where the actual sensation of witnessing the Labookellie tea plantation unfolds into a fantastical world. Our villa transcends the ordinary – it's not merely accommodation; it's a privileged vantage point to behold the awe-inspiring views of Nuwara Eliya and the timeless beauty of the tea plantation.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->
    
    
    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-5 pt-5">
      <div class="container">
        <div class="row align-items-center">
            
          <div class="col-lg-4 order-2 order-sm-1">
            <div class="welcome-content">
              <div class="section-top-sub-title-area">
                  <h3 class="d-none d-sm-block section-top-sub-title">Sub Heading Area</h3>
                  <div class="d-none d-sm-block section-top-sub-title-line"></div>
                  <h3 class="d-block d-sm-none section-top-sub-title2 mb-0 pl-2">Sub Heading Area</h3>
              </div>    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Heritage and History</span>
              </h2>
              <!--<h4>Labookellie Villa Unveils Breathtaking Views of Labookellie Tea Plantation</h4>-->
              <p>Labookellie Villa, the second oldest tea plantation in Sri Lanka, invites you to a retreat steeped in history and heritage. With tea bushes that have thrived for over a century and a half, our estate is a living testament to the endurance of Ceylon tea. Nestled directly facing the plantation, our villa invites you to immerse yourself in the captivating legacy initiated in 1841, a testament to the rich history of Labookellie as a pioneer in the tea industry.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Read More</a>
            </div>
          </div>
          <div class="col-lg-8 mb-4 mb-lg-0 order-1 order-sm-2">
            <div class="row no-gutters welcome-images">
              <!--<div class="col-sm-7">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc01.jpg" alt="Card image cap">
                </div>
              </div>
              <div class="col-sm-5">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc02.jpg" alt="Card image cap">
                </div>
              </div>-->
              <div class="col-lg-12">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/labookelie_section_img.jpg" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->    
    
    
    <!-- ================ welcome section start ================= -->
    <section class="welcome mt-5 pt-5">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="row no-gutters welcome-images">
              <!--<div class="col-sm-7">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc01.jpg" alt="Card image cap">
                </div>
              </div>
              <div class="col-sm-5">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/home_wc02.jpg" alt="Card image cap">
                </div>
              </div>-->
              <div class="col-lg-12">
                <div class="card">
                  <img class="" src="{{ URL::to('') }}/resources/images/home/labookelie_section_img.jpg" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>            
          <div class="col-lg-4">
            <div class="welcome-content">
              <div class="section-top-sub-title-area">
                  <h3 class="d-none d-sm-block section-top-sub-title">Sub Heading Area</h3>
                  <div class="d-none d-sm-block section-top-sub-title-line"></div>
                  <h3 class="d-block d-sm-none section-top-sub-title2 mb-0 pl-2">Sub Heading Area</h3>
              </div>    
              <h2 class="mb-3 mt-3">
                  <span class="d-block">Tea Lover's Paradise</span>
              </h2>
              <!--<h4>Labookellie Villa Unveils Breathtaking Views of Labookellie Tea Plantation</h4>-->
              <p>Labookellie is renowned for producing some of Ceylon's finest teas, sought after by connoisseurs worldwide. Your stay at Labookellie Villa includes an invitation to the iconic Labookellie Tea Lounge, located adjacent to the factory. Here, you can join scores of fellow travelers, both foreigners and locals, in relishing a fresh cup of tantalizing tea as you continue your onward journey to the central hills.</p>
              <a class="button button--active home-banner-btn mt-3" href="{{ URL::to('') }}">Read More</a>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= -->    
    

    
    <section class="section-margin mb- pb-3 mt-5 pt-3">
      <div class="container">
        <div class="section-intro text-center pb-0">
          <div class="section-intro__style pt-5">
            <img src="{{ URL::to('') }}/resources/images/home/bed-icon.png" alt="">
          </div>
          <div class="main-title-area">
              <div class="d-none d-sm-block main-title-left-line main-title-lines"></div>
              <h3 class="main-sub-title">Our Location</h3>
              <h3 class="d-block d-sm-none main-sub-title2">Our Location</h3>
              <div class="d-none d-sm-block main-title-right-line main-title-lines"></div>
          </div>
              <h2>Convenient Location</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-12 mb-4 mt-4 mb-lg-0 text-center pb-4">
              <h3 class="sub-heading">Escape to Nature's Embrace at Labookellie Villa:
</h3>
          </div>    
          <div class="col-md-10 col-lg-10 mb-4 mb-lg-0">
             <p>As you embark on your journey, let the allure of natural beauty guide your path. When the day's adventures conclude, find solace at Labookellie Villa, where you can rest amidst the captivating embrace of lush plantations. Immerse yourself in the tranquility of this enchanting destination, allowing the beauty of the surroundings to rejuvenate your spirit.</p>  
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-12 mb-4 mt-4 mb-lg-0 text-center pb-4">
              <h3 class="sub-heading">A Secluded Oasis with Convenient Access:
</h3>
          </div>    
          <div class="col-md-10 col-lg-10 mb-4 mb-lg-0">
             <p>Labookellie Villa strikes the perfect balance between serenity and convenience. Just a short 35-minute drive from Nuwara Eliya city, our villa offers a secluded haven without sacrificing accessibility. Whether you choose to explore the lively markets of the city or embark on a picturesque journey through the central hills, our location ensures seamless access to the best of both worlds.</p>  
             <a class="button button--active home-banner-btn mt-3 d-none" href="{{ URL::to('') }}">Read More</a>
          </div>
        </div>
        
        <div class="row justify-content-center mt-5 destinations-list-area">
            <div class="col-12 col-sm-3 text-center d-grid">
               <h3>2.30</h3><span>Hrs</span><p>To Kandy City</p> 
            </div>
            <div class="col-12 col-sm-3 text-center d-grid">
               <h3>35</h3><span>Mins</span><p>To Nuwara eliya</p>
            </div>
            <div class="col-12 col-sm-3 text-center d-grid">
               <h3>1.15</h3><span>Hrs</span><p>To Pidurutalagala</p> 
            </div>
        </div>
        
      </div>
    </section>  
    
    

    
    <section class="section-margin mb- pb-5 mt-0 pt-0">
      <div class="container">
        
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-4 mt-3">
               <div class="card destinations-items">
                   <div class="row justify-content-center">
                       <div class="col-12 col-md-12">
                           <h4 class="p-3">Explore Kandy and Sri Dalada Maligawa</h4>
                       </div>
                       <div class="col-12 col-md-12">
                           <img src="{{ URL::to('') }}/resources/images/home/labookelie_dalada_maligawa_v.jpg" class="img-fluid"/>
                       </div>
                       <div class="col-12 col-md-12">
                           <p class="p-3">Uncover the cultural richness of Kandy, where the revered Sri Dalada Maligawa, the Temple of the Sacred Tooth Relic, awaits your discovery. Nestled in the royal palace complex of the former Kingdom of Kandy, this Buddhist temple houses the sacred relic of the Buddha's tooth.
</p>
                       </div>
                   </div>
               </div> 
            </div>
            <div class="col-12 col-sm-4 mt-3">
               <div class="card destinations-items">
                   <div class="row justify-content-center">
                       <div class="col-12 col-md-12">
                           <h4 class="p-3">Excursion to Royal Botanic Gardens, Peradeniya</h4>
                       </div>
                       <div class="col-12 col-md-12">
                           <img src="{{ URL::to('') }}/resources/images/home/labookelie-botanical-gardens-peradeniya-v.jpg" class="img-fluid"/>
                       </div>
                       <div class="col-12 col-md-12">
                           <p class="pl-3 pr-3 pt-3 mb-0">Duration: 18 minutes</p>
                           <p class="pl-3 pr-3 pt-0 mb-0">Distance: 6.2 km</p>
                           <p class="p-3">Enhance your journey by exploring the Royal Botanic Gardens in Peradeniya. Renowned for its collection of orchids, the garden boasts over 4,000 plant species, including spices, medicinal plants, and palm trees. Immerse yourself in this botanical haven, situated near the majestic Mahaweli River, and attached to the "National Herbarium of Sri Lanka." Managed by the Department of National Botanic Gardens, the garden spans 147 acres at 460 meters above sea level, offering a lush retreat with a 200-day annual rainfall.
</p>
                       </div>
                   </div>
               </div> 
            </div>
            <div class="col-12 col-sm-4 mt-3">
               <div class="card destinations-items">
                   <div class="row justify-content-center">
                       <div class="col-12 col-md-12">
                           <h4 class="p-3">Venture from Kandy to Ramboda Falls</h4>
                       </div>
                       <div class="col-12 col-md-12">
                           <img src="{{ URL::to('') }}/resources/images/home/labookelie-ramboda-water-falls-v.jpg" class="img-fluid"/>
                       </div>
                       <div class="col-12 col-md-12">
                           <p class="pl-3 pr-3 pt-3 mb-0">Duration: 1 hour and 57 minutes</p>
                           <p class="pl-3 pr-3 pt-0 mb-0">Distance: 55.3 km</p>
                           <p class="p-3">Discover the Beauty of Ramboda Falls:
Located in the Pussellawa area, Ramboda Falls stands as the 11th highest waterfall in Sri Lanka. Surrounded by tea plantations, it boasts two cascading drops that gracefully unfold, easily visible from the roadside. Immerse yourself in the natural wonders of this captivating destination throughout your stay at Labookellie Villa.
</p>
                       </div>
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
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
@endpush

@push('js')
    <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
    <script>
        // function init() {
        // var player = videojs('my-video', {
        //     autoplay: true,
        //     muted: true
        // });
        // }
</script>
@endpush

