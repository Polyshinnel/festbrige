@extends('layers.layer')
@section('page_title', $pageInfo['page_title'])
@section('page_description', $pageInfo['page_description'])

@section('content')
    <section class="event-banner">
        <div class="box-container">
            <div class="event-banner__text-wrapper">
                <div class="event-banner__text">
                    <h1>{{$pageText['title']}}</h1>
                    <div class="event-banner__text-arrow-block">
                        <div class="event-banner__text-arrow">
                            <img src="assets/img/arrow-white.svg" alt="">
                        </div>
                        <p>{{$pageText['subtitle']}}</p>
                    </div>
                </div>

                <div class="event-banner__img">
                    <a href="/storage/{{$images[0]['img']}}" data-fancybox="gallery">
                        <img src="/storage/{{$images[0]['thumb']}}" alt="">
                    </a>
                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="/storage/{{$images[1]['img']}}" data-fancybox="gallery">
                        <img src="/storage/{{$images[1]['thumb']}}" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="/storage/{{$images[2]['img']}}" data-fancybox="gallery">
                        <img src="/storage/{{$images[2]['thumb']}}" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">
                    <a href="/storage/{{$images[3]['img']}}" data-fancybox="gallery">
                        <img src="/storage/{{$images[3]['thumb']}}" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="/storage/{{$images[4]['img']}}" data-fancybox="gallery">
                        <img src="/storage/{{$images[4]['thumb']}}" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="/storage/{{$images[5]['img']}}" data-fancybox="gallery">
                        <img src="/storage/{{$images[5]['thumb']}}" alt="">
                    </a>
                </div>
            </div>

            <div class="mobile-img-wrapper">
                @foreach($images as $image)
                    <a href="/storage/{{$image['img']}}" data-fancybox="gallery">
                        <img src="/storage/{{$image['thumb']}}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <!--/event-banner-->

    <section class="base-section event-section-block">
        <img src="assets/img/family-events/banner.webp" class="section-bg">
        <div class="content">
            <div class="box-container">
                <div class="content__wrapper">
                    <div class="content__title">
                        <h2>{{$pageText['motto']}}</h2>
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
    <!-- /.event-section-block -->

    <section class="event-formats">
        <div class="box-container">
            <div class="event-formats__wrapper">
                <div class="event-formats__text">
                    <h2>FORMATS:</h2>
                    <ul>
                        @foreach($services as $service)
                            <li>
                                <p>{{$service}}</p>
                                <div class="round-selector"></div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <img src="assets/img/family-events/page-img.webp" alt="">
            </div>
        </div>
    </section>
    <!--/event-formats-->
@endsection
