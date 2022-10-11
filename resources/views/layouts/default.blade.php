<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DarEn BLOG || HOME</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet"
        href="/css/bootstrap.min.css%2banimate.css%2bowl.carousel.min.css%2bthemify-icons.css%2bliner_icon.css%2bsearch.css.pagespeed.cc.OQbQ_Q3mBi.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
    <script
        nonce="8092bdd4-1e30-43bd-9674-0bbddd697967">(function (w, d) { !function (a, e, t, r) { a.zarazData = a.zarazData || {}; a.zarazData.executed = []; a.zaraz = { deferred: [], listeners: [] }; a.zaraz.q = []; a.zaraz._f = function (e) { return function () { var t = Array.prototype.slice.call(arguments); a.zaraz.q.push({ m: e, a: t }) } }; for (const e of ["track", "set", "debug"]) a.zaraz[e] = a.zaraz._f(e); a.zaraz.init = () => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r), n = e.getElementsByTagName("title")[0]; n && (a.zarazData.t = e.getElementsByTagName("title")[0].text); a.zarazData.x = Math.random(); a.zarazData.w = a.screen.width; a.zarazData.h = a.screen.height; a.zarazData.j = a.innerHeight; a.zarazData.e = a.innerWidth; a.zarazData.l = a.location.href; a.zarazData.r = e.referrer; a.zarazData.k = a.screen.colorDepth; a.zarazData.n = e.characterSet; a.zarazData.o = (new Date).getTimezoneOffset(); a.zarazData.q = []; for (; a.zaraz.q.length;) { const e = a.zaraz.q.shift(); a.zarazData.q.push(e) } z.defer = !0; for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => { try { a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t)) } catch { a.zarazData["z_" + t.slice(7)] = e.getItem(t) } })); z.referrerPolicy = "origin"; z.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))); t.parentNode.insertBefore(z, t) };["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, 0, "script"); })(window, document);</script>
</head>

<body>
    @if (session()->has('status'))
        <p class="alert">{{session('status')}}</p>
    @endif
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="/user/create">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/user/login">Login</a>
                                </li>
                                @endguest
                                @auth
                                    <form id="logout_form" action="/user/logout" method="POST">
                                        @csrf
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="logout()" href="#">Logout</a>
                                        </li>
                                    </form>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/add-post"> Add post</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/all-posts"> View post</a>
                                    </li>
                                @endauth
                                <li class="nav-item">
                                    <a class="nav-link" href="category.html"> Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">elements</a>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="header_social_icon d-none d-sm-block">
                            <ul>
                                <li>
                                    <div id="wrap">
                                        <form action="#" method="POST">
                                            <input id="search" name="search" type="text" placeholder="Search here"><span
                                                class="ti-search"></span>
                                        </form>
                                    </div>
                                </li>
                                <li><a href="#" class="d-none d-lg-block"><i class="ti-facebook"></i></a></li>
                                <li><a href="#" class="d-none d-lg-block"> <i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#" class="d-none d-lg-block"><i class="ti-instagram"></i></a></li>
                                <li><a href="#" class="d-none d-lg-block"><i class="ti-skype"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="single-footer-widget footer_1">
                        <h4>About Me</h4>
                        <p>Do you want to be even more successful? Learn to love learning and growth.
                            The more effort you put into improving your skills, the bigger the payoff
                            you will get. Realize that things will be hard at first, but the rewards
                            will be worth it.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <span class="ti-home"></span>
                            <h5>Los angeles, United States</h5>
                            <p>659, Rocky beach bullevard, santa monica, Rocky beach, USA.</p>
                        </div>
                        <div class="contact_info">
                            <span class="ti-headphone-alt"></span>
                            <h5>+44 6532 986 652</h5>
                            <p>Mon to Fri 9am to 6 pm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-10">
                    <div class="single-footer-widget footer_3">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends The more effort you put into
                            improving your skills, the bigger the payoff you will get realize that things.</p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><span
                                                class="lnr lnr-arrow-right"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0">
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made
                            with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/"
                                target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="/js/jquery-1.12.1.min.js"></script>

    <script src="/js/popper.min.js%2bbootstrap.min.js%2bcustom.js.pagespeed.jc.gYmHlo_7vK.js"></script>
    <script>eval(mod_pagespeed_PWLQVsaTcP);</script>

    <script>eval(mod_pagespeed_tVPbFyQalw);</script>

    <script>eval(mod_pagespeed_Laj8mi1YRf);</script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"75452a3a8f48f2ae","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}'
        crossorigin="anonymous"></script>
    <script>
        function logout(){
            document.getElementById('logout_form').submit();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>


</html>