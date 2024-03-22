
  @extends('layouts.app')


  @section('content')
  <!-- ================ start banner area ================= -->
  <section class="blog-banner-area" id="about">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Experiences</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ URL::to('') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Experiences</li>
        </ol>
      </nav>
      
            </div>
        </div>
</div>
</section>

 <!-- ================ start gallery section ================= -->
<section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <div class="section-intro__style">
          <img src="{{ URL::to('') }}/resources/images/home/bed-icon.png" alt="">
        </div>
        <h2>Immerse Yourself in Unforgettable Experiences at Labookellie Villa</h2>
      </div>

      <div class="row">
        <div class="col-12 col-md-12 mb-4 mb-lg-4">
            <p>Discover the true essence of Sri Lanka's tea country through a curated selection of experiences at Labookellie Villa. Our goal is to offer you a journey that goes beyond the ordinary, allowing you to connect with the beauty and heritage that surrounds us.</p>
        </div>  
        <div class="col-md-12 col-lg-12 mb-4 mb-lg-4">
            <h4 class="pages-subheading-number">01.Walk the Tea Plantation:</h4>
            <p>Embark on a guided tour through the Labookellie tea plantation, where the lush greenery and rolling hills create a mesmerizing landscape. Take in the fresh mountain air as you stroll among century-old tea bushes, learning about the art of tea cultivation and plucking. This immersive walk provides a firsthand encounter with the natural beauty that defines Nuwara Eliya.</p>
        </div>
        
        <div class="col-md-12 col-lg-12 mb-4 mb-lg-4">
            <h4 class="pages-subheading-number">02.Tea Factory Visit:</h4>
            <p>Step behind the scenes and delve into the heart of Labookellie's tea production process with a visit to our iconic tea factory. Witness the craftsmanship involved in transforming freshly plucked tea leaves into the exquisite blends that have made Labookellie renowned worldwide. Engage with the tea-making process and gain insights into the heritage that defines our estate.</p>
            <p>As you embark on a captivating tea factory tour, you'll witness the meticulous processes involved in creating white and black tea. Green tea, processed in a separate facility, makes its way here. Explore the unique methods employed in crafting different types of tea, gaining insights into the intricate stages of plucking, withering, rolling, fermentation, firing, and sorting/grading.
Experience the art of tea-making, where only the top leaves—two or three leaves and a bud—are carefully selected for black tea, ensuring the production of a beverage that is both healthy and fresh. Join us on a journey through <b>Labookellie Villa</b>, where the essence of Sri Lanka's tea culture comes alive in every sip.</p>
        </div>
        
        <div class="col-md-12 col-lg-12 mb-4 mb-lg-4">
            <h4 class="pages-subheading-number">03.Experience the Taste of Tea from Labookellie Tea Lounge:</h4>
            <p>Indulge your senses in a unique tea-tasting experience at the <b>Labookellie</b> Tea Lounge, located adjacent to the factory. Sample a variety of Labookellie's finest teas, carefully curated to tantalize your taste buds. Whether you're a seasoned tea connoisseur or a novice eager to explore different flavors, Labookellie Lagune offers a delightful journey into the diverse and exquisite world of Ceylon tea.</p>
            <p>At <b>Labookellie Villa</b>, we invite you to immerse yourself in these captivating experiences that showcase the beauty, history, and flavor of Labookellie Estate. Book your stay with us and let these unforgettable moments become an integral part of your Sri Lankan adventure.</p>
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
