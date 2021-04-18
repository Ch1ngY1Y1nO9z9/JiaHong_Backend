<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $seo = App\Seo::find(1); ?>
    <meta name="keywords" content="{{$seo->keyword}}">
    <meta name="description" content="{{$seo->description}}" />
    <title>{{$seo->title}}</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6KMT43YTRM"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6KMT43YTRM');
    </script>

    @yield('recaptcha')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    @yield('css')


</head>

<body>
    <header>
        <div class="blank"></div>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="left_side col-6 col-md-4">
                        <div class="logo">
                            <a class="w-100" href="/ch">
                                <img width="100%" class="lazy" data-src="/img/logo.png" src="/img/logo.png" alt="嘉鴻塑膠">
                                <span>
                                    嘉鴻塑膠
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="right_side col-6 col-md-8">
                        <div class="d-none d-md-block h-100">
                            <ul class="p-0 m-0 links row">
                                <li class="link col">
                                    <a href="/ch#about_us">關於嘉鴻</a>
                                </li>
                                <li class="link col">
                                    <a href="/ch#news">最新消息</a>
                                </li>
                                <li class="link col">
                                    <a href="/ch#products">產品介紹</a>
                                </li>
                                <li class="link col">
                                    <a href="/ch#contact_us">聯絡我們</a>
                                </li>
                                <li class="link col">
                                    <a href="/en">中/英</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mobile_menu d-flex h-100">
                            <div class="ms-auto my-auto d-block d-md-none dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item" href="#about_us">
                                            關於嘉鴻
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#news">
                                            最新消息
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#products">
                                            產品介紹
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#contact_us">
                                            聯絡我們
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/en">
                                            中/英
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="footer_info">
                505 彰化縣鹿港鎮溝墘里棋盤巷77號 Tel:04-7779606<br>
                Copyright © 2021 嘉鴻塑膠股份有限公司 All Rights Reserved
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    @yield('js')

</body>

</html>
