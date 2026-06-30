@extends('layouts.app')

@section('title', 'Our Gallery - WUMIYIN & MASE NIGERIA LIMITED')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url('{{ asset('images/background/2.jpg') }}');">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Our Gallery</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Gallery</li>
			</ul>
		</div>
	</div>
</section>
<!-- end main-content -->

<!-- Gallery Section -->
<section class="gallery-section pt-120 pb-90">
    <div class="auto-container">
        <div class="row">
            @foreach($galleryImages as $image)
            <!-- Gallery Item -->
            <div class="gallery-item-column col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="{{ ($loop->index % 4) * 100 }}ms">
                <div class="gallery-card-box">
                    <div class="gallery-img-box" style="height: 250px;">
                        <img src="{{ asset($image) }}" alt="Wumiyin & Mase Logistics in Action" style="height: 100%; width: 100%; object-fit: cover;" />
                        <div class="gallery-overlay">
                            <a href="{{ asset($image) }}" class="lightbox-image" data-fancybox="gallery" data-caption="Wumiyin & Mase Logistics in Action">
                                <span class="gallery-zoom-icon"><i class="fa fa-plus"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
