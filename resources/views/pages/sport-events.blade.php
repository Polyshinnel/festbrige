@extends('layers.layer')
@section('page_title', $pageInfo['page_title'])
@section('page_description', $pageInfo['page_description'])

@section('content')
    <section class="event-banner">
        <div class="box-container">
            <div class="event-banner__text-wrapper">
                <div class="event-banner__text">
                    <h1>SPORT EVENTS</h1>
                    <div class="event-banner__text-arrow-block">
                        <div class="event-banner__text-arrow">
                            <img src="assets/img/arrow-white.svg" alt="">
                        </div>
                        <p>Our energetic team with a sports expertise will organize team-building tournaments and business championships for your company in any kind of sports.</p>
                    </div>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/sport-events/gallery/1.webp" data-fancybox="gallery">
                        <img src="assets/img/sport-events/1.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="assets/img/sport-events/gallery/2.webp" data-fancybox="gallery">
                        <img src="assets/img/sport-events/2.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/sport-events/gallery/3.webp" data-fancybox="gallery">
                        <img src="assets/img/sport-events/3.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">
                    <a href="assets/img/sport-events/gallery/4.webp" data-fancybox="gallery">
                        <img src="assets/img/sport-events/4.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="assets/img/sport-events/gallery/5.webp" data-fancybox="gallery">
                        <img src="assets/img/sport-events/5.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/sport-events/gallery/6.webp" data-fancybox="gallery">
                        <img src="assets/img/sport-events/6.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="mobile-img-wrapper">
                <a href="assets/img/sport-events/gallery/1.webp" data-fancybox="gallery">
                    <img src="assets/img/sport-events/1.webp" alt="">
                </a>
                <a href="assets/img/sport-events/gallery/2.webp" data-fancybox="gallery">
                    <img src="assets/img/sport-events/2.webp" alt="">
                </a>
                <a href="assets/img/sport-events/gallery/3.webp" data-fancybox="gallery">
                    <img src="assets/img/sport-events/3.webp" alt="">
                </a>
                <a href="assets/img/sport-events/gallery/4.webp" data-fancybox="gallery">
                    <img src="assets/img/sport-events/4.webp" alt="">
                </a>
                <a href="assets/img/sport-events/gallery/5.webp" data-fancybox="gallery">
                    <img src="assets/img/sport-events/5.webp" alt="">
                </a>
                <a href="assets/img/sport-events/gallery/6.webp" data-fancybox="gallery">
                    <img src="assets/img/sport-events/6.webp" alt="">
                </a>
            </div>
        </div>
    </section>
    <!--/event-banner-->

    <section class="base-section event-section-block">
        <img src="assets/img/sport-events/banner.webp" alt="" class="section-bg">
        <div class="content">
            <div class="box-container">
                <div class="content__wrapper">
                    <div class="content__title">
                        <h2>Team-building tournaments and business championships for your company in any kind of sports</h2>
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
                        <li>
                            <p>Corporate Tournaments</p>
                            <div class="round-selector"></div>
                        </li>

                        <li>
                            <p>Companies Competitions</p>
                            <div class="round-selector"></div>
                        </li>
                    </ul>
                </div>

                <img src="assets/img/sport-events/page-img.webp" alt="">
            </div>
        </div>
    </section>
@endsection
