<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/tour/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tour/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/tour/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/tour/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/tour/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/tour/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/tour/css/daterangepicker.css">
    <link rel="stylesheet" href="/tour/css/aos.css">
    <link rel="stylesheet" href="/tour/css/style.css">

    <title>CellinSC</title>
</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        @include('layouts.navbar')
    </nav>

    @yield('content')
    <div class="site-footer">
        @include('layouts.footer')
    </div>

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script src="/tour/js/jquery-3.4.1.min.js"></script>
    <script src="/tour/js/popper.min.js"></script>
    <script src="/tour/js/bootstrap.min.js"></script>
    <script src="/tour/js/owl.carousel.min.js"></script>
    <script src="/tour/js/jquery.animateNumber.min.js"></script>
    <script src="/tour/js/jquery.waypoints.min.js"></script>
    <script src="/tour/js/jquery.fancybox.min.js"></script>
    <script src="/tour/js/aos.js"></script>
    <script src="/tour/js/moment.min.js"></script>
    <script src="/tour/js/daterangepicker.js"></script>

    <script src="/tour/js/typed.js"></script>
    <script>
        $(function () {
            var slides = $('.slides'),
                images = slides.find('img');

            images.each(function (i) {
                $(this).attr('data-id', i + 1);
            })

            var typed = new Typed('.typed-words', {
                strings: ["San Francisco.", " Paris.", " New Zealand.", " Maui.", " London."],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true,
                preStringTyped: (arrayPos, self) => {
                    arrayPos++;
                    console.log(arrayPos);
                    $('.slides img').removeClass('active');
                    $('.slides img[data-id="' + arrayPos + '"]').addClass('active');
                }

            });
        })
    </script>

    <script src="/tour/js/custom.js"></script>

</body>

</html>