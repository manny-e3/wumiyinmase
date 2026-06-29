@extends('layouts.app')

@section('title', 'Services - WUMIYIN & MASE NIGERIA LIMITED')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url('{{ asset('images/background/2.jpg') }}');">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Our Services</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Services</li>
			</ul>
		</div>
	</div>
</section>
<!-- end main-content -->

<!-- Services Section -->
<section class="services-section">
	<div class="auto-container">
		<div class="row">
			@foreach($services as $svc)
			<!-- Service Block -->
			<div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="{{ $loop->index * 300 }}ms">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image"><a href="{{ route('service.detail', $svc['slug']) }}"><img src="{{ asset($svc['image']) }}" alt="{{ $svc['title'] }}"></a></figure>
					</div>
					<div class="content-box">
						<i class="icon {{ $svc['icon'] }}"></i>
						<span class="sub-title">0{{ $loop->iteration }} Service</span>
						<h4 class="title"><a href="{{ route('service.detail', $svc['slug']) }}">{{ $svc['title'] }}</a></h4>
						<div class="text">{{ $svc['headline'] }}</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- End Services Section-->
@endsection
