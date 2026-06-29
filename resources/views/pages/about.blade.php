@extends('layouts.app')

@section('title', 'About Us - WUMIYIN & MASE NIGERIA LIMITED')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url('{{ asset('images/background/2.jpg') }}');">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">About Us</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>About Us</li>
			</ul>
		</div>
	</div>
</section>
<!-- end main-content -->

<!-- About Section -->
<section class="about-section">
	<div class="anim-icons">
		<div class="float-image wow fadeInRight"><img src="{{ asset('images/resource/float-img-1.png') }}" alt=""></div>
		<span class="icon icon-dotted-map zoom-one"></span>
	</div>

	<div class="auto-container">
		<div class="row">
			<div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
				<div class="inner-column">
					<div class="sec-title">
						<span class="sub-title">WUMIYIN & MASE NIGERIA LIMITED</span>
						<h2>Seamless Freight & Corporate Logistics Solutions</h2>
						<div class="text">Moving cargo across borders can feel overwhelming. At Wumiyin & Mase Nigeria Limited, we eliminate the stress from your supply chain. We treat your commercial shipments, personal belongings, and beloved pets with the highest level of corporate professionalism. Our team combines industry expertise with competitive pricing to deliver seamless logistics solutions tailored to your unique needs.</div>
					</div>

					<div class="content-box">
						<div class="about-block">
							<i class="icon flaticon-worldwide-shipping"></i>
							<h4 class="title">Worldwide Services</h4>
							<p class="text">We connect Nigeria to major global trade hubs through robust air and ocean freight networks.</p>
						</div>

						<div class="about-block">
							<i class="icon flaticon-3d-cube"></i>
							<h4 class="title">Local & Final-Mile Delivery</h4>
							<p class="text">Keep your inventory safe in our secure warehousing, backed by dependable local haulage across Nigeria.</p>
						</div>
					</div>

					<div class="btm-box">
						<a href="{{ route('contact') }}" class="theme-btn btn-style-one"><span class="btn-title">Get A Quote</span></a>
					</div>
				</div>
			</div>

			<!-- Image Column -->
			<div class="image-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column wow fadeInLeft">
					<figure class="image-1 wow fadeInUp"><img src="{{ asset('images/resource/about-1.jpg') }}" alt=""></figure>
					<figure class="image-2 wow fadeInRight"><img src="{{ asset('images/resource/about-2.jpg') }}" alt=""></figure>
					<div class="experience bounce-y"><strong><i class="icon flaticon-global"></i> 100%<br> Corporate</strong> Reliability</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End About Section -->

<!-- Services Section -->
<section class="services-section">
	<div class="bg-image" style="background-image: url('{{ asset('images/background/1.jpg') }}')"></div>
	<div class="anim-icons">
		<span class="icon icon-wave-line"></span>
	</div>

	<div class="auto-container">
		<div class="sec-title text-center">
			<span class="sub-title">SPECIALISE IN LOGISTICS & RELOCATION</span>
			<h2>Specialist logistics services</h2>
		</div>

		<div class="row">
			<!-- Service Block -->
			<div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image"><a href="{{ route('service.detail', 'global-air-ocean-freight') }}"><img src="{{ asset('images/resource/service-1.jpg') }}" alt=""></a></figure>
					</div>
					<div class="content-box">
						<i class="icon flaticon-airplane-2"></i>
						<span class="sub-title">01 Service</span>
						<h4 class="title"><a href="{{ route('service.detail', 'global-air-ocean-freight') }}">Air & Ocean Freight</a></h4>
						<div class="text">Fast, Reliable International Shipping connecting Nigeria globally.</div>
					</div>
				</div>
			</div>

			<!-- Service Block -->
			<div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image"><a href="{{ route('service.detail', 'household-goods-relocation') }}"><img src="{{ asset('images/resource/service-2.jpg') }}" alt=""></a></figure>
					</div>
					<div class="content-box">
						<i class="icon flaticon-cargo-boat"></i>
						<span class="sub-title">02 Service</span>
						<h4 class="title"><a href="{{ route('service.detail', 'household-goods-relocation') }}">Household Relocation</a></h4>
						<div class="text">Relocate safely with zero stress and extreme care.</div>
					</div>
				</div>
			</div>

			<!-- Service Block -->
			<div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image"><a href="{{ route('service.detail', 'pet-shipping') }}"><img src="{{ asset('images/resource/service-3.jpg') }}" alt=""></a></figure>
					</div>
					<div class="content-box">
						<i class="icon flaticon-delivery-truck-3"></i>
						<span class="sub-title">03 Service</span>
						<h4 class="title"><a href="{{ route('service.detail', 'pet-shipping') }}">Specialized Pet Shipping</a></h4>
						<div class="text">Climate-controlled transport & compliance for beloved pets.</div>
					</div>
				</div>
			</div>

			<!-- Service Block -->
			<div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image"><a href="{{ route('service.detail', 'customs-clearance') }}"><img src="{{ asset('images/resource/service-4.jpg') }}" alt=""></a></figure>
					</div>
					<div class="content-box">
						<i class="icon flaticon-delivery-box-4"></i>
						<span class="sub-title">04 Service</span>
						<h4 class="title"><a href="{{ route('service.detail', 'customs-clearance') }}">Customs Clearance</a></h4>
						<div class="text">Seamless compliance and permit processing without delays.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Services Section-->

<!-- Testimonial Section -->
<section class="testimonial-section pt-0 pb-100">
	<div class="anim-icons">
		<span class="icon icon-bg-dots"></span>
		<span class="icon icon-plane-2 bounce-y"></span>
	</div>

	<div class="auto-container">
		<div class="sec-title text-center">
			<span class="sub-title">Client’s Testimonials</span>
			<h2>Here are some clients <br>feedbacks</h2>
		</div>

		<div class="outer-box">
			<!-- Testimonial Carousel -->
			<div class="testimonial-carousel owl-carousel owl-theme">
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content-box">
							<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i></div>
							<div class="text">“Moving our corporate commercial cargo and specialized equipment across borders was handled seamlessly with maximum care and corporate reliability by Wumiyin & Mase.</div>
						</div>
						<div class="thumb"><img src="{{ asset('images/resource/testi-thumb-1.jpg') }}" alt=""></div>
						<span class="designation">Operations Director</span>
						<h4 class="name">Adebayo Ogundele</h4>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content-box">
							<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i></div>
							<div class="text">“Relocating our personal belongings and beloved pets was completely stress-free. Their climate-controlled pet transport and documentation team were incredible!</div>
						</div>
						<div class="thumb"><img src="{{ asset('images/resource/testi-thumb-2.jpg') }}" alt=""></div>
						<span class="designation">Relocation Client</span>
						<h4 class="name">Mrs. Chioma Adeleke</h4>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content-box">
							<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i></div>
							<div class="text">“Customs clearance at the ports used to be a major bottleneck for our imports. Wumiyin & Mase handles all permits and tariffs smoothly without expensive delays.</div>
						</div>
						<div class="thumb"><img src="{{ asset('images/resource/testi-thumb-3.jpg') }}" alt=""></div>
						<span class="designation">Supply Chain Lead</span>
						<h4 class="name">Michael Ibrahim</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Testimonial Section -->
@endsection
