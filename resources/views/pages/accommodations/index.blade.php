
  @extends('layouts.app')


  @section('content')
  <!-- ================ start banner area ================= -->
  <section class="blog-banner-area" id="about">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Accommodations</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ URL::to('') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Accommodations</li>
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
        <h2>Explore our Accommodations</h2>
      </div>

      <div class="row">
        <div class="col-md-12 col-lg-12 mb-4 mb-lg-4">
            <h4 class="pages-subheading-number">01.State View Suite:</h4>
            <p>A haven for those seeking an immersive experience amidst the lush embrace of the tea plantation.</p>
            <p>The State View Suite offers uninterrupted vistas of Labookellie's iconic tea plantation, ensuring that every glance is a picturesque moment. Watch as the tea bushes sway gently in the breeze, creating a mesmerizing dance of greenery right outside your window.
The State View Suite promises a comfortable and luxurious retreat, blending contemporary style with the natural beauty that surrounds Labookellie.
</p>
        </div>
        
        <div class="col-md-12 col-lg-12 mb-4 mb-lg-4">
            <h4 class="pages-subheading-number">02.Retreat Haven Room:</h4>
            <p>Welcome to the Retreat Haven at Labookellie Villa—an intimate sanctuary for those seeking tranquility. Tucked away from the world, this secluded room invites you to escape and unwind. With its harmonious design and comforting ambiance, the Retreat Haven promises a peaceful refuge amidst the beauty of Labookellie. Embrace solitude, recharge, and discover serenity in this hidden gem</p>
        </div>
        
        <div class="col-md-12 col-lg-12 mb-4 mb-lg-4">
            <h4 class="pages-subheading-number">03.Green Garden Room:</h4>
            <p>Nestled within the embrace of Labookellie's verdant surroundings, the Green Garden Room welcomes you to a space that harmonizes with nature. This room is a celebration of the lush greenery that envelops Labookellie Villa, offering a tranquil retreat for nature enthusiasts and those seeking a connection with the outdoors.</p>
            <p>The Green Garden Room is a perfect blend of comfort and natural splendor, providing a rejuvenating experience for guests who appreciate the soothing embrace of a green sanctuary.</p>
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
