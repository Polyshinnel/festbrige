<header class="header">

    <div class="box-container">
        <div class="header__wrapper">
            <nav class="header-nav">
                @if($headerLinks)
                    @foreach($headerLinks as $headerLink)
                        <a href="{{$headerLink['link']}}">{{$headerLink['name']}}</a>
                    @endforeach
                @endif
            </nav>

            <div class="lang-switcher">
                <a href="#" class="active">ENG</a>
                <p>/</p>
                <a href="#">RUS</a>
            </div>

            <div class="mobile-logo">
                <a href="/">
                    <img src="assets/img/mobile-logo.svg" alt="">
                </a>
            </div>

            <div class="mobile-btn" id="menu-btn">
                <img src="assets/img/menu.svg" alt="">
            </div>
        </div>

        <div class="header-menu" id="header-menu">
            <div class="box-container">
                <h2>Menu</h2>

                <ul>
                    @if($headerLinks)
                        @foreach($headerLinks as $headerLink)
                            <li>
                                <a href="{{$headerLink['link']}}">{{$headerLink['name']}}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</header>
