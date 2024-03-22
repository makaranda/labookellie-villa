
  @extends('layouts.app')


  @section('content')
  <!-- ================ start banner area ================= -->
  <section class="blog-banner-area" id="about">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Dining</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ URL::to('') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dining</li>
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
        <h2>Indulge Your Palate in a Symphony of Flavors at Labookellie Villa</h2>
      </div>

      <div class="row">
        <div class="col-12 col-md-12 mb-4 mb-lg-4">
            <p>At Labookellie Villa, we believe that a memorable stay is not only about the breathtaking views and luxurious accommodations but also about savoring exquisite culinary delights. Our dining experience is curated to delight your taste buds with a fusion of local and international flavors, all set against the stunning backdrop of Labookellie's tea-covered hills.</p>
        </div> 
        <div class="col-md-12 col-lg-12 mb-4 mb-lg-4">
            <h4 class="pages-subheading-number">Savor the Essence of Sri Lankan Hospitality with Our Private Appu Dining Experience:</h4>
            <p>At Labookellie Villa, we redefine dining by offering an exclusive culinary journey with our Private Appu service. Immerse yourself in the authentic flavors of Sri Lankan cuisine as our skilled Appu, a traditional chef, prepares delectable dishes right in the heart of our villa.</p>
            <p>Feel the warmth and personalized touch as our Private Appu crafts a bespoke dining experience tailored to your preferences. From traditional Sri Lankan delicacies to international fare, each dish is infused with the dedication and expertise that only a seasoned Appu can provide.</p>
            <p>Engage in the culinary process, witness the artistry of Sri Lankan cooking, and savor the rich tapestry of flavors meticulously prepared for you. This unique dining experience transcends the ordinary, allowing you to relish the true essence of Sri Lankan hospitality in the intimate setting of Labookellie Villa.</p>
            <p>Whether it's a romantic dinner for two or a gathering with loved ones, our Private Appu Dining Experience promises an unforgettable journey for your taste buds, where tradition, authenticity, and exquisite flavors seamlessly come together.</p>
        </div>
        <div class="col-md-12 col-lg-12 mb-4 mb-lg-4">
            <h4 class="pages-subheading-number">Outdoor High Tea Experience:</h4>
            <p>Indulge in a sophisticated outdoor high tea experience at Labookellie Villa, where we invite you to savor every moment amidst the natural beauty that surrounds us. Our meticulously curated high tea setting is hosted in the villa garden, providing an enchanting ambiance that perfectly complements the iconic view of the Labookellie Tea Plantation.</p>
            <p>As you take your seat, the garden blooms around you, creating a serene backdrop for a leisurely afternoon. The iconic Labookellie Tea Plantation unfolds majestically, setting the scene for an unforgettable outdoor dining experience. Immerse yourself in the tranquility of our surroundings, where the aroma of freshly brewed tea mingles with the gentle breeze.</p>
            <p>Our high tea menu is a symphony of flavors, featuring an array of delectable treats meticulously crafted to delight your palate. Sip on exquisite teas and coffees, paired with an assortment of sweet and savory delights that showcase the finest local and international flavors.</p>
            <p>Whether you're celebrating a special occasion or simply seeking a moment of indulgence, our outdoor high tea experience at Labookellie Villa promises to be a delightful retreat, where nature and culinary artistry come together to create lasting memories.</p>
        </div>
        <div class="col-md-12 col-lg-12 mb-4 mb-lg-4">
            <p>At Labookellie Villa, we invite you to not only feast your eyes on the beauty of Labookellie but also to treat your palate to an array of flavors that reflect the rich tapestry of Sri Lankan cuisine. Book your stay now and embark on a culinary adventure amidst the tea-covered hills</p>
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
