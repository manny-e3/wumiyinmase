@extends('layouts.app')

@section('title', 'Too Many Requests - WUMIYIN & MASE NIGERIA LIMITED')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url('{{ asset('images/background/2.jpg') }}');">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Too Many Requests</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>429 Error</li>
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
				<div class="icon-box mb-30" style="font-size: 100px; color: #fcdb65;">
					<i class="fa fa-hand-paper"></i>
				</div>
				<h2 class="title mb-20" style="font-weight: 800; font-size: 36px; color: #000000;">Too Many Requests</h2>
				<p class="text mb-40" style="font-size: 18px; color: #666666; max-width: 600px; margin: 0 auto 30px auto; line-height: 1.8;">
					You have sent too many requests in a short period of time. Please slow down, wait a few moments, and try again.
				</p>
				<div class="btn-box">
					<a href="{{ route('home') }}" class="theme-btn btn-style-one"><span class="btn-title">Back to Home</span></a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
