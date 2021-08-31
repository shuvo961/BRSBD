
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Apply for Birth Registration o a child & get certified , This is the Online Birth Registration System Bangladesh.">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Online Birth Registration Bangladesh | BRSBD | BirthregBD" />
    <meta property="og:description" content="Apply for Birth Registration o a child & get certified , This is the Online Birth Registration System Bangladesh." />
    <meta property="og:url" content="https://birthregbd.ml/index.php" />
    <meta property="og:section" content="Birth Registration Bangladesh" />
    <meta property="og:image" content="https://birthregbd.ml/{{asset('/')}}/images/logo.png" />



    <title>Birth Registration System Bangladesh | Home :: BRSBD | BirthregBD </title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('/')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}/css/style-starter.css">

</head>
<body>

@include('front-end.includes.header')

@yield('body')

@include('front-end.includes.footer')


<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- /move top -->
</section>
<!-- // grids block 5 -->
<script src="{{asset('/')}}/js/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<!-- //footer-28 block -->
</section>

<!-- script for -->
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                }
            }
        })
    })
</script>
<!-- //script -->



<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->



<!-- Smooth scrolling -->

<script src="{{asset('/')}}/js/owl.carousel.js"></script>


</body>

</html>
<!-- // grids block 5 -->
