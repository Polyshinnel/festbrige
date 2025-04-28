@extends('layers.layer_main')
@section('page_title', $pageInfo['page_title'])
@section('page_description', $pageInfo['page_description'])

@section('content')
    <section class="banner-main">
        <div class="box-container">
            <div class="banner-main__wrapper">
                <div class="banner-main__text">
                    <img src="assets/img/logo.svg" alt="" class="banner-logo">

                    <div class="banner-main__text-motto">
                        <p>events memorable<br>
                            <span>for a lifetime</span></p>
                    </div>
                </div>

                <img src="assets/img/main-img.webp" alt="">
            </div>
        </div>
    </section>
    <!--/.banner-main-->

    <section class="base-section about-us">
        <img src="assets/img/about-bg.webp" alt="" class="section-bg">
        <div class="content">
            <div class="box-container">
                <div class="content__wrapper">
                    <div class="content__title">
                        <h1>{{$pageText['about_title']}}</h1>
                        <p>{{$pageText['about_subtitle']}}</p>
                    </div>
                    <div class="content__counters">
                        @foreach($counters as $counter)
                            <div class="content__counter">
                                <span class="number">{{$counter['counter']}}</span>
                                <span class="text">{{$counter['counter_text']}}</span>
                            </div>
                            <!-- /.content__counter -->
                        @endforeach

                    </div>
                </div>
                <!-- /.content__wrapper -->
            </div>
        </div>
        <div class="decor-block">
            <img src="assets/img/section-decor.svg" alt="">
            <img src="assets/img/section-decor.svg" alt="">
        </div>
    </section>
    <!-- /.about-us -->

    <section class="our-services">
        <div class="box-container">
            <div class="our-services__wrapper">
                <h2>OUR SERVICES</h2>
                @foreach($services as $service)
                    @if($service['idx'] % 2 === 0)
                        <div class="our-services__item our-services__item_margin">
                            <div class="our-services__item-wrapper">
                                <div class="our-services__item-wrapper-unit">
                                    <div class="our-services__item-wrapper-unit__images">
                                        @foreach($service['images'] as $image)
                                            <a href="/storage/{{$image['img']}}" data-fancybox="gallery">
                                                <img src="/storage/{{$image['img_small']}}" alt="">
                                            </a>
                                        @endforeach
                                    </div>
                                    <!--/.our-services__item-wrapper-unit__images-->

                                    <section class="splide carousel carousel-{{$service['idx']}}">
                                        <div class="splide__track">
                                            <ul class="splide__list">
                                                @foreach($service['images'] as $image)
                                                    <li class="splide__slide">
                                                        <a href="/storage/{{$image['img']}}" data-fancybox="gallery">
                                                            <img src="/storage/{{$image['img_small']}}" alt="">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </section>
                                    <!--/mobile-slider-->

                                    <div class="our-services__item-wrapper-unit-text">
                                        <div class="our-services__item-wrapper-unit-text-info">
                                            <h3>{{$service['title']}}</h3>
                                            <p>@foreach($service['services'] as $text)
                                                    {{$text}} /
                                                @endforeach</p>
                                        </div>

                                        <a href="{{$service['link']}}">
                                            <div class="our-services__item-wrapper-unit-text-arrow">
                                                <img src="assets/img/arrow.svg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/our-services__item-->
                    @else
                        @if($service['idx']  === 1)
                            <div class="our-services__item">
                                <div class="our-services__item-wrapper our-services__item-wrapper_right">
                                    <div class="our-services__item-wrapper-unit">
                                        <div class="our-services__item-wrapper-unit__images">
                                            @foreach($service['images'] as $image)
                                                <a href="/storage/{{$image['img']}}" data-fancybox="gallery">
                                                    <img src="/storage/{{$image['img_small']}}" alt="">
                                                </a>
                                            @endforeach
                                        </div>
                                        <!--/.our-services__item-wrapper-unit__images-->

                                        <section class="splide carousel carousel-{{$service['idx']}}">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    @foreach($service['images'] as $image)
                                                        <li class="splide__slide">
                                                            <a href="/storage/{{$image['img']}}" data-fancybox="gallery">
                                                                <img src="/storage/{{$image['img_small']}}" alt="">
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </section>
                                        <!--/mobile-slider-->

                                        <div class="our-services__item-wrapper-unit-text">
                                            <div class="our-services__item-wrapper-unit-text-info">
                                                <h3>{{$service['title']}}</h3>
                                                <p>@foreach($service['services'] as $text)
                                                        {{$text}} /
                                                    @endforeach</p>
                                            </div>

                                            <a href="{{$service['link']}}">
                                                <div class="our-services__item-wrapper-unit-text-arrow">
                                                    <img src="assets/img/arrow.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/our-services__item-->
                        @else
                            <div class="our-services__item our-services__item_margin">
                                <div class="our-services__item-wrapper our-services__item-wrapper_right">
                                    <div class="our-services__item-wrapper-unit">
                                        <div class="our-services__item-wrapper-unit__images">
                                            @foreach($service['images'] as $image)
                                                <a href="/storage/{{$image['img']}}" data-fancybox="gallery">
                                                    <img src="/storage/{{$image['img_small']}}" alt="">
                                                </a>
                                            @endforeach
                                        </div>
                                        <!--/.our-services__item-wrapper-unit__images-->

                                        <section class="splide carousel carousel-{{$service['idx']}}">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    @foreach($service['images'] as $image)
                                                        <li class="splide__slide">
                                                            <a href="/storage/{{$image['img']}}" data-fancybox="gallery">
                                                                <img src="/storage/{{$image['img_small']}}" alt="">
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </section>
                                        <!--/mobile-slider-->

                                        <div class="our-services__item-wrapper-unit-text">
                                            <div class="our-services__item-wrapper-unit-text-info">
                                                <h3>{{$service['title']}}</h3>
                                                <p>@foreach($service['services'] as $text)
                                                        {{$text}} /
                                                    @endforeach</p>
                                            </div>

                                            <a href="{{$service['link']}}">
                                                <div class="our-services__item-wrapper-unit-text-arrow">
                                                    <img src="assets/img/arrow.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/our-services__item-->
                        @endif

                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- /.our-services -->
@endsection
