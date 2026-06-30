@extends('layouts.app')

@section('title', 'Maintenance Mode - WUMIYIN & MASE NIGERIA LIMITED')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url('{{ asset('images/background/2.jpg') }}');">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Under Maintenance</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>503 Error</li>
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
					<i class="fa fa-cog fa-spin"></i>
				</div>
				<h2 class="title mb-20" style="font-weight: 800; font-size: 36px; color: #000000;">Under Scheduled Maintenance</h2>
				<p class="text mb-40" style="font-size: 18px; color: #666666; max-width: 600px; margin: 0 auto 30px auto; line-height: 1.8;">
					Our website is currently undergoing scheduled updates and maintenance to serve you better. We will be back online shortly. Thank you for your patience!
				</p>
			</div>
		</div>
	</div>
</section>
@endsection
