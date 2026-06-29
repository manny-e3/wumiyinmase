@extends('layouts.app')

@section('title', $service['title'] . ' - WUMIYIN & MASE NIGERIA LIMITED')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url('{{ asset('images/background/2.jpg') }}')">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Service Details</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li><a href="{{ route('services') }}">Services</a></li>
				<li>{{ $service['title'] }}</li>
			</ul>
		</div>
	</div>
</section>
<!-- end main-content -->

<!--Start Services Details-->
<section class="services-details">
	<div class="container">
		<div class="row">
			<!--Start Services Details Content-->
			<div class="col-xl-8 col-lg-8">
				<div class="services-details__content">
					<img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" />
					<h2 class="mt-4">{{ $service['title'] }}</h2>
					<h4 style="color: #eb5424; font-weight: 700; margin-top: 10px; margin-bottom: 15px;">{{ $service['headline'] }}</h4>
					<p>{{ $service['body'] }}</p>

					<div class="content mt-4">
						<div class="text">
							<h3>Our Scope of Work & Standards</h3>
							<p>At Wumiyin & Mase Nigeria Limited, we eliminate the stress from your supply chain by providing corporate professionalism, clear communication, and transparent pricing tailored to your unique logistics needs.</p>
						</div>
						<div class="feature-list">
							<div class="row clearfix">
								<div class="col-lg-6 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="icon-box"><i class="fas fa-check-circle"></i></div>
										<h6 class="title">Corporate Professionalism</h6>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="icon-box"><i class="fas fa-check-circle"></i></div>
										<h6 class="title">Transparent Pricing</h6>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="icon-box"><i class="fas fa-check-circle"></i></div>
										<h6 class="title">Timely Cargo Delivery</h6>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="icon-box"><i class="fas fa-check-circle"></i></div>
										<h6 class="title">Full Regulatory Compliance</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-4">
						<h3>Frequently Asked Questions</h3>
						<p>Find quick answers regarding our processes, safety guarantees, and corporate logistics operations.</p>
						<ul class="accordion-box wow fadeInRight">
							<!--Block-->
							<li class="accordion block active-block">
								<div class="acc-btn active">
									How do I get a custom quote for this service?
									<div class="icon fa fa-plus"></div>
								</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">You can fill out our interactive consultation form on the Contact page or call our team directly. We provide transparent, budget-friendly consultations.</div>
									</div>
								</div>
							</li>
							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn">
									How is cargo safety and compliance ensured?
									<div class="icon fa fa-plus"></div>
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Our experienced compliance team handles all documentation, permits, and structured handling protocols to guarantee zero delays and total safety.</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--End Services Details Content-->

			<!--Start Services Details Sidebar-->
			<div class="col-xl-4 col-lg-4">
				<div class="service-sidebar">
					<!--Start Services Details Sidebar Single-->
					<div class="sidebar-widget service-sidebar-single">
						<div class="service-sidebar-single-services wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1200m">
							<div class="title">
								<h3>All Services</h3>
							</div>
							<ul>
								@foreach($allServices as $s)
								<li class="{{ $s['slug'] == $service['slug'] ? 'current' : '' }}">
									<a href="{{ route('service.detail', $s['slug']) }}">{{ $s['title'] }} <i class="fa fa-angle-right"></i></a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
					<!--End Services Details Sidebar Single-->

					<!--Start Services Details Sidebar Single-->
					<div class="sidebar-widget service-sidebar-single">
						<div class="service-sidebar-single-contact-box text-center wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1200m" style="background-image: url('{{ asset('images/resource/news-2.jpg') }}')">
							<div class="icon">
								<span class="lnr lnr-icon-phone"></span>
							</div>
							<div class="title">
								<h2>
									Best <br />Logistics <br />
									Services
								</h2>
							</div>
							<p class="phone"><a href="tel:+2348000000000">+234 800 WUMIYIN</a></p>
							<p>Call Us Anytime</p>
						</div>
					</div>
					<!--End Services Details Sidebar Single-->

					<!--Start Services Details Sidebar Single-->
					<div class="sidebar-widget service-sidebar-single mt-3">
						<div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1200m">
							<a href="{{ route('contact') }}" class="theme-btn btn-style-one d-grid"
								><span class="btn-title"><span class="fas fa-paper-plane"></span> Request Consultation</span></a
							>
						</div>
					</div>
					<!--End Services Details Sidebar Single-->
				</div>
			</div>
			<!--End Services Details Sidebar-->
		</div>
	</div>
</section>
<!--End Services Details-->
@endsection
