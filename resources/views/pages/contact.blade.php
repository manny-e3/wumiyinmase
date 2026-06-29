@extends('layouts.app')

@section('title', 'Contact Us - WUMIYIN & MASE NIGERIA LIMITED')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url('{{ asset('images/background/2.jpg') }}')">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Contact Us</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
</section>
<!-- end main-content -->

<!--Contact Details Start-->
<section class="contact-details">
	<div class="container">
		<div class="row">
			<div class="col-xl-5 col-lg-6">
				<div class="contact-details__right">
					<div class="sec-title">
						<span class="sub-title">Need any help?</span>
						<h2>Get in touch with us</h2>
						<div class="text">Moving cargo across borders can feel overwhelming. At Wumiyin & Mase Nigeria Limited, we eliminate the stress from your supply chain. We treat your commercial shipments, personal belongings, and beloved pets with the highest level of corporate professionalism.</div>
					</div>
					<ul class="list-unstyled contact-details__info">
						<li>
							<div class="icon">
								<span class="lnr-icon-phone-plus"></span>
							</div>
							<div class="text">
								<h6>Have any question?</h6>
								<a href="tel:+2348000000000"><span>Free</span> +234 800 WUMIYIN</a>
							</div>
						</li>
						<li>
							<div class="icon">
								<span class="lnr-icon-envelope1"></span>
							</div>
							<div class="text">
								<h6>Write email</h6>
								<a href="mailto:info@wumiyinmase.com">info@wumiyinmase.com</a>
							</div>
						</li>
						<li>
							<div class="icon">
								<span class="lnr-icon-location"></span>
							</div>
							<div class="text">
								<h6>Visit office</h6>
								<span>Corporate Head Office, Lagos, Nigeria</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6">
				<div class="sec-title">
					<span class="sub-title">Send us email</span>
					<h2>Let’s Get Your Cargo Moving</h2>
				</div>
				
				<!-- Success and Error alerts -->
				@if(session('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert" style="border-left: 4px solid #28a745; margin-bottom: 25px;">
						<strong>Success!</strong> {{ session('success') }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif

				@if($errors->any())
					<div class="alert alert-danger" style="border-left: 4px solid #dc3545; margin-bottom: 25px;">
						<ul class="mb-0">
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<!-- Contact Form -->
				<form id="contact_form" name="contact_form" action="{{ route('contact.submit') }}" method="post">
					@csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-3">
								<label>Full Name / Company Name <small>*</small></label>
								<input name="name" class="form-control" type="text" placeholder="Enter Name / Company" required value="{{ old('name') }}" />
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mb-3">
								<label>Email Address <small>*</small></label>
								<input name="email" class="form-control required email" type="email" placeholder="Enter Email" required value="{{ old('email') }}" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-3">
								<label>Phone Number <small>*</small></label>
								<input name="phone" class="form-control" type="text" placeholder="Enter Phone" required value="{{ old('phone') }}" />
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mb-3">
								<label>Service Needed <small>*</small></label>
								<select name="service" class="form-control" required style="height: 54px; border-radius: 4px; border: 1px solid #ced4da;">
									<option value="" disabled selected>Select a service...</option>
									<option value="Global Air & Ocean Freight">Global Air & Ocean Freight</option>
									<option value="Household Goods & Personal Effects">Household Goods & Personal Effects Relocation</option>
									<option value="Specialized Pet Shipping Services">Specialized Pet Shipping Services</option>
									<option value="Customs Clearance & Permit Processing">Customs Clearance & Permit Processing</option>
									<option value="Warehousing & Local Haulage">Warehousing & Local Haulage</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-3">
								<label>Shipment Origin</label>
								<input name="origin" class="form-control" type="text" placeholder="Origin Address" value="{{ old('origin') }}" />
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mb-3">
								<label>Shipment Destination</label>
								<input name="destination" class="form-control" type="text" placeholder="Destination Address" value="{{ old('destination') }}" />
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label>Message / Special Instructions <small>*</small></label>
						<textarea name="message" class="form-control required" rows="5" placeholder="Describe cargo details, dimensions, pet details, or any special requirements..." required>{{ old('message') }}</textarea>
					</div>
					<div class="mb-3">
						<button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Send Message / Get Quote</span></button>
						<button type="reset" class="theme-btn btn-style-one"><span class="btn-title">Reset</span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--Contact Details End-->

<!-- Divider: Google Map -->
<section>
	<div class="container-fluid p-0">
		<div class="row">
			<!-- Google Map HTML Codes -->
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843149788316!2d144.9537131159042!3d-37.81714274201087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sbn!2sbd!4v1583760510840!5m2!1sbn!2sbd"
				data-tm-width="100%"
				height="500"
				frameborder="0"
				style="border:0; width:100%;"
				allowfullscreen=""
			></iframe>
		</div>
	</div>
</section>
@endsection
