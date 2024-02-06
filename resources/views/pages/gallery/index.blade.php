
  @extends('layouts.app')


  @section('content')
  <!-- ================ start banner area ================= -->
  <section class="blog-banner-area" id="about">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Gallery</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ URL::to('') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
      </nav>
            </div>
        </div>
</div>
</section>

 <!-- ================ start gallery section ================= -->
 <section class="section-margin">
    <div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="row">
						<div class="col-12 mb-4">
							<a href="{{ URL::to('') }}/resources/images/gallery/g1-458x440.jpg" class="img-gal card-img">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg"></div>
									<div class="relative">
										<img class="card-img rounded-0" src="{{ URL::to('') }}/resources/images/gallery/g1-458x440.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 mb-4">
							<a href="{{ URL::to('') }}/resources/images/gallery/g2-458x699.jpg" class="img-gal card-img">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg"></div>
									<div class="relative">
										<img class="card-img rounded-0" src="{{ URL::to('') }}/resources/images/gallery/g2-458x699.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-7">
					<div class="row">
						<div class="col-sm-7 mb-4">
							<a href="{{ URL::to('') }}/resources/images/gallery/g3-360x327.jpg" class="img-gal card-img">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg"></div>
									<div class="relative">
										<img class="card-img rounded-0" src="{{ URL::to('') }}/resources/images/gallery/g3-360x327.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-5 mb-4">
							<a href="{{ URL::to('') }}/resources/images/gallery/g4-261x327.jpg" class="img-gal card-img">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg"></div>
									<div class="relative">
										<img class="card-img rounded-0" src="{{ URL::to('') }}/resources/images/gallery/g4-261x327.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-4">
							<a href="{{ URL::to('') }}/resources/images/gallery/g5-652x408.jpg" class="img-gal card-img">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg"></div>
									<div class="relative">
										<img class="card-img rounded-0" src="{{ URL::to('') }}/resources/images/gallery/g5-652x408.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7 mb-4">
							<a href="{{ URL::to('') }}/resources/images/gallery/g6-360x372.jpg" class="img-gal card-img">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg"></div>
									<div class="relative">
										<img class="card-img rounded-0" src="{{ URL::to('') }}/resources/images/gallery/g6-360x372.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-5 mb-4">
							<a href="{{ URL::to('') }}/resources/images/gallery/g7.png" class="img-gal card-img">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg"></div>
									<div class="relative">
										<img class="card-img rounded-0" src="{{ URL::to('') }}/resources/images/gallery/g7.png" alt="">
									</div>
								</div>
							</a>
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
