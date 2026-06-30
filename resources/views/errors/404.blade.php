@extends('layouts.app')

@section('title', 'Page Not Found - WUMIYIN & MASE NIGERIA LIMITED')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url('{{ asset('images/background/2.jpg') }}');">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Page Not Found</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>404 Error</li>
			</ul>
		</div>
	</div>
</section>
<!-- end main-content -->

<!-- Error Section -->
<section class="error-section pt-120 pb-120">
	<div class="auto-container">
		<div class="error-block text-center">
			<div class="inner-box">
				<div class="image-box mb-40">
					<img src="{{ asset('images/resource/404.jpg') }}" alt="404 Error - Page Not Found" style="max-width: 450px; width: 100%; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);" />
				</div>
				<h2 class="title mb-20" style="font-weight: 800; font-size: 36px; color: #000000;">Oops! Page Not Found</h2>
				<p class="text mb-40" style="font-size: 18px; color: #666666; max-width: 600px; margin: 0 auto 30px auto; line-height: 1.8;">
					The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Let's get you back on track!
				</p>
				<div class="btn-box">
					<a href="{{ route('home') }}" class="theme-btn btn-style-one"><span class="btn-title">Back to Home</span></a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
