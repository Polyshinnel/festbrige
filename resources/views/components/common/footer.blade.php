<footer class="footer">
    <div class="box-container">
        <div class="footer__wrapper">
            <div class="footer-address">
                <h2>FEST BRIDGE EAST EVENTS MANAGING L.L.C</h2>
                <p>Office: {{$contacts['address'][0]}}</p>
            </div>

            <div class="footer-contacts">
                <p>Mail: <a href="mailto:{{$contacts['email']}}">{{$contacts['email']}}</a></p>
                <p>TEL: <a href="tel:{{$contacts['phone']}}">{{$contacts['phone']}}</a></p>
            </div>

            <div class="footer-logo">
                <img src="/assets/img/logo.svg" alt="">
            </div>
        </div>
    </div>
</footer>

<script src="/assets/js/fancy-box/fancybox.umd.js"></script>
<script src="/assets/js/splide/js/splide.min.js"></script>
<script src="/assets/js/main.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
</script>
