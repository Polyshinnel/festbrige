@extends('layers.layer')
@section('page_title', $pageInfo['page_title'])
@section('page_description', $pageInfo['page_description'])

@section('content')
    <section class="event-banner">
        <div class="box-container">
            <div class="event-banner__text-wrapper">
                <div class="event-banner__text">
                    <h1>RETREATS</h1>
                    <div class="event-banner__text-arrow-block">
                        <div class="event-banner__text-arrow">
                            <img src="assets/img/arrow-white.svg" alt="">
                        </div>
                        <p>Sometimes we all need spiritual and physical restoration.
                            Our retreats in picturesque tranquil settings will help you to reboot completely through mindfulness, body practices and reconnecting with nature.</p>
                    </div>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/retrits/gallery/1.webp" data-fancybox="gallery">
                        <img src="assets/img/retrits/1.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="assets/img/retrits/gallery/2.webp" data-fancybox="gallery">
                        <img src="assets/img/retrits/2.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/retrits/gallery/3.webp" data-fancybox="gallery">
                        <img src="assets/img/retrits/3.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">
                    <a href="assets/img/retrits/gallery/4.webp" data-fancybox="gallery">
                        <img src="assets/img/retrits/4.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="assets/img/retrits/gallery/5.webp" data-fancybox="gallery">
                        <img src="assets/img/retrits/5.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/retrits/gallery/6.webp" data-fancybox="gallery">
                        <img src="assets/img/retrits/6.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="mobile-img-wrapper">
                <a href="assets/img/retrits/gallery/1.webp" data-fancybox="gallery">
                    <img src="assets/img/retrits/1.webp" alt="">
                </a>
                <a href="assets/img/retrits/gallery/2.webp" data-fancybox="gallery">
                    <img src="assets/img/retrits/2.webp" alt="">
                </a>
                <a href="assets/img/retrits/gallery/3.webp" data-fancybox="gallery">
                    <img src="assets/img/retrits/3.webp" alt="">
                </a>
                <a href="assets/img/retrits/gallery/4.webp" data-fancybox="gallery">
                    <img src="assets/img/retrits/4.webp" alt="">
                </a>
                <a href="assets/img/retrits/gallery/5.webp" data-fancybox="gallery">
                    <img src="assets/img/retrits/5.webp" alt="">
                </a>
                <a href="assets/img/retrits/gallery/6.webp" data-fancybox="gallery">
                    <img src="assets/img/retrits/6.webp" alt="">
                </a>
            </div>
        </div>
    </section>
    <!--/event-banner-->

    <section class="base-section event-section-block">
        <img src="assets/img/retrits/banner.webp" alt="" class="section-bg">
        <div class="content">
            <div class="box-container">
                <div class="content__wrapper">
                    <div class="content__title">
                        <h2>Reboot completely through mindfulness and body practices </h2>
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
                            <p>Private retreats</p>
                            <div class="round-selector"></div>
                        </li>

                        <li>
                            <p>Corporate retreats</p>
                            <div class="round-selector"></div>
                        </li>
                    </ul>
                </div>

                <img src="assets/img/retrits/page-img.webp" alt="">
            </div>
        </div>
    </section>
@endsection
