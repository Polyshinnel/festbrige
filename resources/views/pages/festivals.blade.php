@extends('layers.layer')
@section('page_title', $pageInfo['page_title'])
@section('page_description', $pageInfo['page_description'])

@section('content')
    <section class="event-banner">
        <div class="box-container">
            <div class="event-banner__text-wrapper">
                <div class="event-banner__text">
                    <h1>FESTIVALS</h1>
                    <div class="event-banner__text-arrow-block">
                        <div class="event-banner__text-arrow">
                            <img src="assets/img/arrow-white.svg" alt="">
                        </div>
                        <p>Cooperation with artistic groups and musicians from all over the world and close interaction with state authorities give us an opportunity to organize both global international festivals and local cultural events.</p>
                    </div>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/1.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/1.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/2.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/2.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/3.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/3.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/4.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/4.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/5.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/5.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/6.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/6.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="mobile-img-wrapper">
                <a href="assets/img/festivals/gallery/1.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/1.webp" alt="">
                </a>
                <a href="assets/img/festivals/gallery/2.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/2.webp" alt="">
                </a>
                <a href="assets/img/festivals/gallery/3.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/3.webp" alt="">
                </a>
                <a href="assets/img/festivals/gallery/4.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/4.webp" alt="">
                </a>
                <a href="assets/img/festivals/gallery/5.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/5.webp" alt="">
                </a>
                <a href="assets/img/festivals/gallery/6.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/6.webp" alt="">
                </a>
            </div>
        </div>
    </section>
    <!--/event-banner-->

    <section class="base-section event-section-block">
        <img src="assets/img/festivals/banner.webp" alt="" class="section-bg">
        <div class="content">
            <div class="box-container">
                <div class="content__wrapper">
                    <div class="content__title">
                        <h2>Cooperation with artistic groups and musicians from all over the world</h2>
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
                            <p>Festivals</p>
                            <div class="round-selector"></div>
                        </li>

                        <li>
                            <p>Cultural Events</p>
                            <div class="round-selector"></div>
                        </li>
                    </ul>
                </div>

                <img src="assets/img/festivals/page-img.webp" alt="">
            </div>
        </div>
    </section>
@endsection
