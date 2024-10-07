@extends('layers.layer')
@section('page_title', $pageInfo['page_title'])
@section('page_description', $pageInfo['page_description'])

@section('content')
    <section class="contacts-block">
        <div class="contacts-block__text">
            <h1>CONTACT US</h1>
            <div class="contacts-block__text-warpper">
                <div class="contacts-block__text-warpper-arrow-block">
                    <div class="contacts-block__text-warpper-arrow">
                        <img src="assets/img/arrow-white.svg" alt="">
                    </div>
                    <p>For a memorable event, unique activity or bright ceremony contact us via this feedback form or any other way.</p>
                </div>

                <div class="contacts-data">
                    <ul>
                        <li>
                            <p><a href="mailto:{{$contacts['email']}}">MAIL: {{$contacts['email']}}</a></p>
                            <div class="round-selector"></div>
                        </li>
                        <li>
                            <p><a href="tel:{{$contacts['phone']}}">TEL: {{$contacts['phone']}}</a></p>
                            <div class="round-selector"></div>
                        </li>
                        <li>
                            <p>Office: {{$contacts['address'][0]}}</p>
                            <div class="round-selector"></div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <img src="assets/img/contacts-img.webp" alt="">
    </section>
    <!-- /.contacts-block -->

    <section class="contacts-block__mobile">
        <img src="assets/img/contacts-img.webp" alt="" class="contacts-block__mobile-cover">
        <div class="contacts-block__mobile-content">
            <div class="box-container">
                <h2>CONTACT US</h2>
                <div class="contacts-block__text-warpper">
                    <div class="contacts-block__text-warpper-arrow-block">
                        <div class="contacts-block__text-warpper-arrow">
                            <img src="assets/img/arrow-white.svg" alt="">
                        </div>
                        <p>For a memorable event, unique activity or bright ceremony contact us via this feedback form or any other way.</p>
                    </div>

                    <div class="contacts-data">
                        <ul>
                            <li>
                                <p><a href="mailto:{{$contacts['email']}}">MAIL:{{$contacts['email']}}</a></p>
                                <div class="round-selector"></div>
                            </li>
                            <li>
                                <p><a href="tel:{{$contacts['phone']}}">TEL:{{$contacts['phone']}}</a></p>
                                <div class="round-selector"></div>
                            </li>
                            <li>
                                <p>Office: {{$contacts['address'][0]}}</p>
                                <div class="round-selector"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.contacts-block__mobile -->

    <section class="contacts-form-block">
        <div class="box-container">
            <div class="contacts-form-block__wrapper">
                <form class="contacts-form">
                    <h2>any other questions?</h2>
                    <p class="subtitle">Fill out the form and we'll call you back.</p>
                    <div class="contacts-form__controls">
                        <div class="contacts-form__input">
                            <input type="text" name="customer-question" id="customer-question" placeholder="Your question">
                            <p class="hint">The question field should not be empty</p>
                        </div>
                        <div class="contacts-form__input">
                            <input type="text" name="customer-name" id="customer-name" placeholder="Name">
                            <p class="hint">Enter correct name</p>
                        </div>
                        <div class="contacts-form__input">
                            <input type="text" name="customer-phone" id="customer-phone" placeholder="Phone">
                            <p class="hint">Enter correct phone</p>
                        </div>
                    </div>
                    <input type="submit" class="send-form" value="Отправить">
                </form>
            </div>
        </div>

        <div class="contacts-form-block__decor-item contacts-form-block__decor-item_left">
            <img src="assets/img/section-decor_black.svg" alt="">
        </div>

        <div class="contacts-form-block__decor-item contacts-form-block__decor-item_right">
            <img src="assets/img/section-decor_black.svg" alt="">
        </div>
    </section>
    <!-- /.contacts-form-block -->
@endsection
