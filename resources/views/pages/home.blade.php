@extends('layouts.app')

@section('title', 'WUMIYIN & MASE NIGERIA LIMITED - Fast & Reliable Logistics Solutions')

@section('content')
<!-- Main Banner Slider -->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                <li data-index="rs-1" data-transition="zoomout">
                    <img src="{{ asset('images/main-slider/1.jpg') }}" alt="" class="rev-slidebg" />
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['750','750','750','650']" data-whitespace="normal" data-hoffset="['0','0','0','0']" data-voffset="['-195','-160','-160','-140']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <span class="title">WUMIYIN & MASE NIGERIA LIMITED</span>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]" data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['750','750','750','650']" data-whitespace="normal" data-hoffset="['0','0','0','0']" data-voffset="['-70','-40','-40','-30']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h2 style="color: #ffffff; font-weight: 800; font-size: 50px;">Seamless Logistics Solutions Tailored To Your Needs</h2>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]" data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','700','700','600']" data-whitespace="normal" data-hoffset="['0','0','0','0']" data-voffset="['60','80','80','80']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="btn-box">
                            <a href="{{ route('services') }}" class="theme-btn btn-style-one"><span class="btn-title">Explore Services</span></a>
                            <a href="{{ route('contact') }}" class="theme-btn btn-style-two"><span class="btn-title">Get A Quote</span></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End Main Banner Slider -->

<!-- Features Section -->
<section class="features-section">
    <div class="auto-container">
        <div class="row">
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="icon flaticon-logistics-delivery-6"></i>
                        <span class="count">01</span>
                    </div>
                    <div class="content-box">
                        <h4 class="title"><a href="{{ route('about') }}">Competitive<br />Pricing</a></h4>
                        <div class="text">Premium, transparent logistics services without the premium price tag.</div>
                    </div>
                </div>
            </div>

            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="icon flaticon-fast-delivery-1"></i>
                        <span class="count">02</span>
                    </div>
                    <div class="content-box">
                        <h4 class="title"><a href="{{ route('about') }}">Corporate<br />Reliability</a></h4>
                        <div class="text">Structured processes ensuring consistent safety and on-time delivery.</div>
                    </div>
                </div>
            </div>

            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="icon flaticon-container-2"></i>
                        <span class="count">03</span>
                    </div>
                    <div class="content-box">
                        <h4 class="title"><a href="{{ route('about') }}">Stress-Free<br />Handling</a></h4>
                        <div class="text">We manage complex logistics so you can focus on your business.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Section-->

<!-- About Section -->
<section class="about-section pt-0">
    <div class="anim-icons">
        <div class="float-image wow fadeInRight"><img src="{{ asset('images/resource/float-img-1.png') }}" alt="" /></div>
        <span class="icon icon-dots-1 bounce-x"></span>
        <span class="icon icon-dotted-map zoom-one"></span>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">WELCOME TO WUMIYIN & MASE</span>
                        <h2>Eliminating Stress From Your Global Supply Chain</h2>
                        <div class="text">Moving cargo across borders can feel overwhelming. At Wumiyin & Mase Nigeria Limited, we eliminate the stress from your supply chain. We treat your commercial shipments, personal belongings, and beloved pets with the highest level of corporate professionalism. Our team combines industry expertise with competitive pricing to deliver seamless logistics solutions tailored to your unique needs.</div>
                    </div>

                    <div class="content-box">
                        <div class="about-block">
                            <i class="icon flaticon-worldwide-shipping"></i>
                            <h4 class="title">Worldwide Freight Network</h4>
                            <p class="text">Connecting Nigeria to major global trade hubs through robust air and ocean freight networks.</p>
                        </div>

                        <div class="about-block">
                            <i class="icon flaticon-3d-cube"></i>
                            <h4 class="title">Specialized Relocation & Care</h4>
                            <p class="text">From delicate personal effects to live pets, we treat every shipment with extreme care.</p>
                        </div>
                    </div>

                    <div class="btm-box">
                        <a href="{{ route('about') }}" class="theme-btn btn-style-one"><span class="btn-title">Explore More</span></a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image-1"><img src="{{ asset('images/resource/about-1.jpg') }}" alt="" /></figure>
                    <figure class="image-2"><img src="{{ asset('images/resource/about-2.jpg') }}" alt="" /></figure>
                    <div class="experience">
                        <strong><i class="icon flaticon-global"></i> 100%<br />Reliability</strong>
                        Corporate Logistics
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Core Services Section -->
<section class="services-section">
    <div class="bg-image" style="background-image: url('{{ asset('images/background/1.jpg') }}')"></div>
    <div class="anim-icons">
        <span class="icon icon-wave-line"></span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">SPECIALISE IN LOGISTICS & RELOCATION</span>
            <h2>Our Core Services</h2>
        </div>

        <div class="row">
            @foreach($services as $svc)
            <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="{{ $loop->index * 300 }}ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ route('service.detail', $svc['slug']) }}"><img src="{{ asset($svc['image']) }}" alt="{{ $svc['title'] }}" style="height: 250px; width: 100%; object-fit: cover;"></a></figure>
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
<!-- End Core Services Section -->

<!-- Gallery Section -->
<section class="gallery-section pt-100 pb-70" style="background-color: #f8f9fa;">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title" style="color: #fcdb65 !important; font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 2px;">OUR GALLERY</span>
            <h2 style="font-weight: 800; font-size: 36px; color: #000000; margin-top: 5px;">Logistics In Action</h2>
        </div>

        <div class="row">
            @foreach($randomImages as $image)
            @php
                $categories = ['Air Freight', 'Ocean Freight', 'Relocation', 'Pet Shipping', 'Customs Clearance', 'Warehousing'];
                $titles = ['Cargo Operations', 'Global Shipments', 'Household Packing', 'Safe Pet Travel', 'Clearance Hub', 'Secure Storage'];
                $cat = $categories[$loop->index % count($categories)];
                $title = $titles[$loop->index % count($titles)];
            @endphp
            <!-- Gallery Item -->
            <div class="gallery-item-column col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="{{ $loop->index * 150 }}ms">
                <div class="gallery-card-box">
                    <div class="gallery-img-box">
                        <img src="{{ asset($image) }}" alt="Wumiyin & Mase Logistics" />
                        <div class="gallery-overlay">
                            <a href="{{ asset($image) }}" class="lightbox-image" data-fancybox="gallery" data-caption="Wumiyin & Mase - {{ $title }}">
                                <span class="gallery-zoom-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="gallery-text">
                                <!-- <span class="gallery-cat">{{ $cat }}</span>
                                <h4 class="gallery-title">{{ $title }}</h4> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Call To Action Quote Section -->
<section class="cta-section pt-80 pb-80" style="background: linear-gradient(135deg, #0d233a 0%, #1a3c61 100%); color: #fff;">
    <div class="auto-container text-center">
        <h2 style="color: #fff; font-weight: 800; font-size: 36px; margin-bottom: 15px;">Let’s Get Your Cargo Moving</h2>
        <p style="font-size: 18px; color: #e0e0e0; max-width: 700px; margin: 0 auto 30px auto;">Contact our team today for a transparent, budget-friendly logistics consultation.</p>
        <a href="{{ route('contact') }}" class="theme-btn btn-style-one" style="background-color: #eb5424; border-color: #eb5424;"><span class="btn-title">Request A Consultation</span></a>
    </div>
</section>
@endsection
