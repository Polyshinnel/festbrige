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
                        <h1>ABOUT US</h1>
                        <p>Fest Bridge East is an international company organizing corporate events in the UAE. We transform any event into a memorable experience for a lifetime.</p>
                    </div>
                    <div class="content__counters">
                        <div class="content__counter">
                            <span class="number">5</span>
                            <span class="text">years experience</span>
                        </div>
                        <!-- /.content__counter -->

                        <div class="content__counter">
                            <span class="number">70</span>
                            <span class="text">EVENTS</span>
                        </div>
                        <!-- /.content__counter -->

                        <div class="content__counter">
                            <span class="number">15 000</span>
                            <span class="text">PARTICIPANTS</span>
                        </div>
                        <!-- /.content__counter -->
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

                <div class="our-services__item">
                    <div class="our-services__item-wrapper our-services__item-wrapper_right">
                        <div class="our-services__item-wrapper-unit">
                            <div class="our-services__item-wrapper-unit__images">
                                <a href="assets/img/main-img/corp-events/gallery/1.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/corp-events/1.webp" alt="">
                                </a>

                                <a href="assets/img/main-img/corp-events/gallery/2.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/corp-events/2.webp" alt="">
                                </a>

                                <a href="assets/img/main-img/corp-events/gallery/3.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/corp-events/3.webp" alt="">
                                </a>
                            </div>
                            <!--/.our-services__item-wrapper-unit__images-->

                            <section class="splide carousel carousel-1">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/corp-events/gallery/1.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/corp-events/1.webp" alt="">
                                            </a>
                                        </li>

                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/corp-events/gallery/2.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/corp-events/2.webp" alt="">
                                            </a>
                                        </li>

                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/corp-events/gallery/3.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/corp-events/3.webp" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!--/mobile-slider-->

                            <div class="our-services__item-wrapper-unit-text">
                                <div class="our-services__item-wrapper-unit-text-info">
                                    <h3>Corporate Events</h3>
                                    <p>corporate events / team-buildings / branding / catering</p>
                                </div>

                                <a href="/corporate-events">
                                    <div class="our-services__item-wrapper-unit-text-arrow">
                                        <img src="assets/img/arrow.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/our-services__item-->

                <div class="our-services__item our-services__item_margin">
                    <div class="our-services__item-wrapper">
                        <div class="our-services__item-wrapper-unit">
                            <div class="our-services__item-wrapper-unit__images">
                                <a href="assets/img/main-img/festivals/gallery/1.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/festivals/1.webp" alt="">
                                </a>

                                <a href="assets/img/main-img/festivals/gallery/2.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/festivals/2.webp" alt="">
                                </a>

                                <a href="assets/img/main-img/festivals/gallery/3.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/festivals/3.webp" alt="">
                                </a>
                            </div>
                            <!--/.our-services__item-wrapper-unit__images-->

                            <section class="splide carousel carousel-2">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/festivals/gallery/1.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/festivals/1.webp" alt="">
                                            </a>
                                        </li>

                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/festivals/gallery/2.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/festivals/2.webp" alt="">
                                            </a>
                                        </li>

                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/festivals/gallery/3.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/festivals/3.webp" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!--/mobile-slider-->

                            <div class="our-services__item-wrapper-unit-text">
                                <div class="our-services__item-wrapper-unit-text-info">
                                    <h3>Festivals</h3>
                                    <p>festivals / cultural events</p>
                                </div>

                                <a href="/festivals">
                                    <div class="our-services__item-wrapper-unit-text-arrow">
                                        <img src="assets/img/arrow.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/our-services__item-->

                <div class="our-services__item our-services__item_margin">
                    <div class="our-services__item-wrapper our-services__item-wrapper_right">
                        <div class="our-services__item-wrapper-unit">
                            <div class="our-services__item-wrapper-unit__images">
                                <a href="assets/img/main-img/sport-events/gallery/1.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/sport-events/1.webp" alt="">
                                </a>

                                <a href="assets/img/main-img/sport-events/gallery/2.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/sport-events/2.webp" alt="">
                                </a>

                                <a href="assets/img/main-img/sport-events/gallery/3.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/sport-events/3.webp" alt="">
                                </a>
                            </div>
                            <!--/.our-services__item-wrapper-unit__images-->

                            <section class="splide carousel carousel-3">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/sport-events/gallery/1.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/sport-events/1.webp" alt="">
                                            </a>
                                        </li>

                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/sport-events/gallery/2.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/sport-events/2.webp" alt="">
                                            </a>
                                        </li>

                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/sport-events/gallery/3.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/sport-events/3.webp" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!--/mobile-slider-->

                            <div class="our-services__item-wrapper-unit-text">
                                <div class="our-services__item-wrapper-unit-text-info">
                                    <h3>Sport Events</h3>
                                    <p>corporate tournaments / companies competitions</p>
                                </div>

                                <a href="/sport-events">
                                    <div class="our-services__item-wrapper-unit-text-arrow">
                                        <img src="assets/img/arrow.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/our-services__item-->

                <div class="our-services__item our-services__item_margin">
                    <div class="our-services__item-wrapper">
                        <div class="our-services__item-wrapper-unit">
                            <div class="our-services__item-wrapper-unit__images">
                                <a href="assets/img/main-img/family-events/gallery/1.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/family-events/1.webp" alt="">
                                </a>

                                <a href="assets/img/main-img/family-events/gallery/2.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/family-events/2.webp" alt="">
                                </a>

                                <a href="assets/img/main-img/family-events/gallery/3.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/family-events/3.webp" alt="">
                                </a>
                            </div>
                            <!--/.our-services__item-wrapper-unit__images-->

                            <section class="splide carousel carousel-4">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/family-events/gallery/1.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/family-events/1.webp" alt="">
                                            </a>
                                        </li>

                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/family-events/gallery/2.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/family-events/2.webp" alt="">
                                            </a>
                                        </li>

                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/family-events/gallery/3.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/family-events/3.webp" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!--/mobile-slider-->

                            <div class="our-services__item-wrapper-unit-text">
                                <div class="our-services__item-wrapper-unit-text-info">
                                    <h3>Family Celebrations</h3>
                                    <p>weddings / birthdays / children parties</p>
                                </div>

                                <a href="/family-celebrations">
                                    <div class="our-services__item-wrapper-unit-text-arrow">
                                        <img src="assets/img/arrow.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/our-services__item-->

                <div class="our-services__item our-services__item_margin">
                    <div class="our-services__item-wrapper our-services__item-wrapper_right">
                        <div class="our-services__item-wrapper-unit">
                            <div class="our-services__item-wrapper-unit__images">
                                <a href="assets/img/main-img/retrits/gallery/1.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/retrits/1.webp" alt="">
                                </a>

                                <a href="assets/img/main-img/retrits/gallery/2.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/retrits/2.webp" alt="">
                                </a>

                                <a href="assets/img/main-img/retrits/gallery/3.webp" data-fancybox="gallery">
                                    <img src="assets/img/main-img/retrits/3.webp" alt="">
                                </a>
                            </div>
                            <!--/.our-services__item-wrapper-unit__images-->

                            <section class="splide carousel carousel-5">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/retrits/gallery/1.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/retrits/1.webp" alt="">
                                            </a>
                                        </li>

                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/retrits/gallery/2.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/retrits/2.webp" alt="">
                                            </a>
                                        </li>

                                        <li class="splide__slide">
                                            <a href="assets/img/main-img/retrits/gallery/3.webp" data-fancybox="gallery">
                                                <img src="assets/img/main-img/retrits/3.webp" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!--/mobile-slider-->


                            <div class="our-services__item-wrapper-unit-text">
                                <div class="our-services__item-wrapper-unit-text-info">
                                    <h3>Retreats</h3>
                                    <p>private retreats / corporate retreats</p>
                                </div>

                                <a href="/retreats">
                                    <div class="our-services__item-wrapper-unit-text-arrow">
                                        <img src="assets/img/arrow.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/our-services__item-->
            </div>
        </div>
    </section>
    <!-- /.our-services -->
@endsection
