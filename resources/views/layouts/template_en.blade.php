<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $seo = App\Seo::find(1); ?>
    <meta name="keywords" content="{{$seo->keyword}}">
    <meta name="description" content="{{$seo->description}}" />
    <title>{{$seo->title}}</title>

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
                            <a class="w-100" href="/en">
                                <img width="100%" class="lazy" data-src="/img/logo.png" src="/img/logo.png" alt="JIAHUNG">
                                <span>
                                    JIA HUNG
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="right_side col-6 col-md-8">
                        <div class="d-none d-md-block h-100">
                            <ul class="p-0 m-0 links row">
                                <li class="link col">
                                    <a href="#about_us">ABOUT</a>
                                </li>
                                <li class="link col">
                                    <a href="/en#news">NEWS</a>
                                </li>
                                <li class="link col">
                                    <a href="/en#products">PRODUCTS</a>
                                </li>
                                <li class="link col">
                                    <a href="/en#contact_us">CONTACT</a>
                                </li>
                                <li class="link col">
                                    <?php $lan = $_SERVER['REQUEST_URI']; ?>
                                    <a href="/ch">CH/EN</a>
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
                                            ABOUT
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#news">
                                            NEWS
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#products">
                                            PRODUCTS
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#contact_us">
                                            CONTACT
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/ch">
                                            CH/EN
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
                No. 77, Chipan Ln., Lukang Township,Changhua County 505 , Taiwan Tel:04-7779606<br>Copyright © 2021 JIA HONG PLASTICS FACTORY CO. All Rights Reserved
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    @yield('js')

</body>

</html>
