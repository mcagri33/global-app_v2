<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="Financer | Business Consultations Template">
    <meta name="keywords" content="business, corporate, page, html, template, carousel, parallax, agency, html5">

    <!-- FAVICON FILES -->
    <link href="{{asset('assets/site/ico/apple-touch-icon-144-precomposed.png')}}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{asset('assets/site/ico/apple-touch-icon-114-precomposed.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('assets/site/ico/apple-touch-icon-72-precomposed.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('assets/site/ico/apple-touch-icon-57-precomposed.png')}}" rel="apple-touch-icon">
    <link href="{{asset('assets/site/ico/favicon.png')}}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link href="{{asset('assets/site/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/css/odometer.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <![endif]-->
</head>
<body>
<div class="preloader"> <svg class="spinner" id="pageloader_anime" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg> </div>
<!-- end preloader -->
<div class="search-box transition">
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <form>
                    <input type="text" placeholder="Type here to make a search" autofocus>
                    <button type="submit">SEARCH</button>
                </form>
            </div>
            <!-- end container -->
        </div>
        <!-- end table-cell -->
    </div>
    <!-- end table -->
</div>
<!-- end search-box -->

<!-- end header -->
@yield('site')

@include('site.layouts.footer')
<!-- end footer -->
<a href="#" class="scrollup"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

<!-- JS FILES -->
<script src="{{asset('assets/site/js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(window).load(function() {
        $(".preloader").fadeOut("fast");
    })
</script>
<script src="{{asset('assets/site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/site/js/jPushMenu.js')}}"></script>
<script src="{{asset('assets/site/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/site/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/site/js/wow.min.js')}}"></script>
<script src="{{asset('assets/site/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/site/js/scripts.js')}}"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('assets/site/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type='text/javascript' src='{{asset('assets/site/revolution/js/revolution.addon.slicey.min.js?ver=1.0.0')}}'></script>
<script type="text/javascript" src="{{asset('assets/site/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

<script type="text/javascript">

    var tpj=jQuery;
    var revapi24;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_24_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_24_1");
        }else{
            revapi24 = tpj("#rev_slider_24_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"{{asset('assets/site/revolution/js/')}}",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    bullets: {
                        enable:true,
                        hide_onmobile:false,
                        style:"bullet-bar",
                        hide_onleave:false,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:50,
                        space:5,
                        tmp:''
                    }
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[868,768,960,720],
                lazyType:"none",
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                fullScreenAutoWidth:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }

        if(revapi24) revapi24.revSliderSlicey();
    });	/*ready*/
</script>
</body>
</html>
