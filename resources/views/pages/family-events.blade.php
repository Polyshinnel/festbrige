@extends('layers.layer')
@section('page_title', $pageInfo['page_title'])
@section('page_description', $pageInfo['page_description'])

@section('content')
    <section class="event-banner">
        <div class="box-container">
            <div class="event-banner__text-wrapper">
                <div class="event-banner__text">
                    <h1>FAMILY CELEBRATIONS</h1>
                    <div class="event-banner__text-arrow-block">
                        <div class="event-banner__text-arrow">
                            <img src="assets/img/arrow-white.svg" alt="">
                        </div>
                        <p>Family is a truly important thing. That's why we come up for organizing of any family celebration, should it be a wedding or a birthday party, as for the most significant event in your life.</p>
                    </div>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/family-events/gallery/1.webp" data-fancybox="gallery">
                        <img src="assets/img/family-events/1.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="assets/img/family-events/gallery/2.webp" data-fancybox="gallery">
                        <img src="assets/img/family-events/2.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/family-events/gallery/3.webp" data-fancybox="gallery">
                        <img src="assets/img/family-events/3.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">
                    <a href="assets/img/family-events/gallery/4.webp" data-fancybox="gallery">
                        <img src="assets/img/family-events/4.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="assets/img/family-events/gallery/5.webp" data-fancybox="gallery">
                        <img src="assets/img/family-events/5.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/family-events/gallery/6.webp" data-fancybox="gallery">
                        <img src="assets/img/family-events/6.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="mobile-img-wrapper">
                <a href="assets/img/family-events/gallery/1.webp" data-fancybox="gallery">
                    <img src="assets/img/family-events/1.webp" alt="">
                </a>
                <a href="assets/img/family-events/gallery/2.webp" data-fancybox="gallery">
                    <img src="assets/img/family-events/2.webp" alt="">
                </a>
                <a href="assets/img/family-events/gallery/3.webp" data-fancybox="gallery">
                    <img src="assets/img/family-events/3.webp" alt="">
                </a>
                <a href="assets/img/family-events/gallery/4.webp" data-fancybox="gallery">
                    <img src="assets/img/family-events/4.webp" alt="">
                </a>
                <a href="assets/img/family-events/gallery/5.webp" data-fancybox="gallery">
                    <img src="assets/img/family-events/5.webp" alt="">
                </a>
                <a href="assets/img/family-events/gallery/6.webp" data-fancybox="gallery">
                    <img src="assets/img/family-events/6.webp" alt="">
                </a>
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
                        <h2>Organizing of any family celebration, as for the most significant event in your life</h2>
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
                            <p>Weddings</p>
                            <div class="round-selector"></div>
                        </li>

                        <li>
                            <p>Birthdays</p>
                            <div class="round-selector"></div>
                        </li>

                        <li>
                            <p>Children Parties</p>
                            <div class="round-selector"></div>
                        </li>
                    </ul>
                </div>

                <img src="assets/img/family-events/page-img.webp" alt="">
            </div>
        </div>
    </section>
    <!--/event-formats-->
@endsection
