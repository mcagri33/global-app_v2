@extends('site.site_master')
@section('title','Site Title')
@if(!session()->get('session_short_name'))
    @php
        $current_short_name = $global_short_name;
    @endphp
@else
    @php
        $current_short_name = session()->get('session_short_name');
    @endphp
@endif
@php
    $current_language_id = \App\Models\Language::where('short_name',$current_short_name)->first()->id;
@endphp


<header class="int-header">
    <nav class="navbar navbar-default navbar-fixed-top transition">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <ul class="top-menu">
                            <li><a href="#">{{Career}}</a></li>
                            <li><a href="#">{{On_Press}}</a></li>
                            <li><a href="#">{{Support}}</a></li>
                        </ul>
                        <!-- end top-menu -->
                    </div>
                    <!-- end col-6 -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <span class="social-text">{{Connect_Us}}</span>
                        <!-- end social-text -->
                        <ul class="social-media">
                            @if($global_setting_data->facebook)
                                <li><a href="{{$global_setting_data->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            @endif
                            @if($global_setting_data->twitter)
                                <li><a href="{{$global_setting_data->twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            @endif
                            @if($global_setting_data->youtube)
                                <li><a href="{{$global_setting_data->youtube}}" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            @endif
                            @if($global_setting_data->instagram)
                                <li><a href="{{$global_setting_data->instagram}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            @endif
                        </ul>
                        <!-- end social-media -->
                        @if(count($global_language_data)>1)
                            <div class="language"><span>{{SELECT_LANG}}</span>
                                <form action="{{route('front_language')}}" method="post">
                                    <select name="short_name" onchange="this.form.submit()">
                                        @foreach($global_language_data as $item)
                                            <option
                                                value="{{$item->short_name}}" {{$item->short_name == $current_short_name ? "selected" : ""}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </form>
                                <!-- end dropdown -->
                            </div>
                        @endif

                        <!-- end language -->
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end top-bar -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse"
                        data-target="#collapse-nav"><span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html"> <img src="{{asset('assets/site/images/logo-light.png')}}"
                                                                alt="Image" class="logo-light"> <img
                        src="{{asset('assets/site/images/logo-dark.png')}}" alt="Image" class="logo-dark"><span
                        class="since">25<br>
        <small>years</small></span> </a></div>
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="collapse-nav">
                <ul class="top-menu visible-xs">
                    <li><a href="#">{{Career}}</a></li>
                    <li><a href="#">{{On_Press}}</a></li>
                    <li><a href="#">{{Support}}</a></li>
                </ul>
                <!-- end top-menu -->
                <ul class="nav navbar-nav">
                    <li><a href="{{route('site.index')}}">{{HOME}}</a></li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">{{COMPANY}}</a>
                        <ul class="dropdown-menu">
                            <li><a href="about-us.html">{{About_Us}}</a></li>
                            <li><a href="partners.html">{{Partners}}</a></li>
                            <li><a href="gallery.html">{{Galery}}</a></li>
                        </ul>
                    </li>
                    <li><a href="projects.html">{{PROJECTS}}</a></li>
                    <li><a href="services.html">{{SERVICES}}</a></li>
                    <li><a href="{{route('site.new.index')}}">{{NEWS}}</a></li>
                    <li><a href="contact.html">{{CONTACT}}</a></li>
                </ul>
                <!-- end navbar-nav -->
                <a href="#" class="quote-btn">GET QUOTE</a>
                <span class="phone"><i class="fa fa-phone" aria-hidden="true"></i> +38 075 92 47</span>
                <!-- end phone -->
                <div class="search"><i class="fa fa-search" aria-hidden="true"></i></div>
                <!-- end search -->
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar-default -->
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <h3>@yield('title')<span>.</span></h3>
            </div>
            <!-- end container -->
        </div>
        <!-- end table-cell -->
    </div>

</header>


@section('site')

    <!-- end navbar-default -->
    <div id="rev_slider_24_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="website-intro" data-source="gallery" >
        <div id="rev_slider_24_1" class="rev_slider fullscreenbanner tiny_bullet_slider" data-version="5.4.1">
            <ul>
                <li data-index="rs-67" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="600"  data-thumb="{{asset('assets/site/images/hero1.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent"> <img src="{{asset('assets/site/images/hero1.jpg')}}"  alt="Image"  data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-9"
                         data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']"
                         data-width="['250','250','150','150']"
                         data-height="['150','150','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-10"
                         data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']"
                         data-width="['150','150','100','100']"
                         data-height="['200','150','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-29"
                         data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']"
                         data-width="['250','250','150','150']"
                         data-height="['150','150','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-12"
                         data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']"
                         data-width="['250','250','100','100']"
                         data-height="150"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-34"
                         data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']"
                         data-width="['300','300','150','150']"
                         data-height="['200','200','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-11"
                         data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']"
                         data-width="150"
                         data-height="['250','150','50','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-27"
                         data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']"
                         data-width="['250','250','150','150']"
                         data-height="['300','300','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-28"
                         data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']"
                         data-width="['300','300','150','150']"
                         data-height="['250','250','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-30"
                         data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']"
                         data-width="['300','300','150','200']"
                         data-height="['250','250','150','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-31"
                         data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']"
                         data-width="['300','300','150','150']"
                         data-height="['250','250','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-32"
                         data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']"
                         data-width="['300','300','150','150']"
                         data-height="['200','200','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-33"
                         data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']"
                         data-width="['450','400','250','250']"
                         data-height="['100','100','50','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-67-layer-35"
                         data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']"
                         data-width="['350','400','250','250']"
                         data-height="['100','100','50','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper "
                         id="slide-67-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-width="full"
                         data-height="full"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-basealign="slide"
                         data-responsive_offset="off"
                         data-responsive="off"
                         data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption main-title   tp-resizeme"
                         id="slide-67-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']"
                         data-fontsize="['90','90','70','50']"
                         data-lineheight="['90','90','70','50']"
                         data-width="['none','none','481','360']"
                         data-height="none"
                         data-whitespace="['nowrap','nowrap','normal','normal']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 19; white-space: nowrap; font-size: 90px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: -5px; ">Making your unique<br/>
                        Ideas possible. </div>
                    <div class="tp-caption   tp-resizeme"
                         id="slide-67-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']"
                         data-fontsize="['25','25','25','20']"
                         data-lineheight="['35','35','35','30']"
                         data-width="['480','480','480','360']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">Upgrade now and become a member of Financer
                        it is available for now! </div>
                    <a class="tp-caption rev-btn  tp-resizeme"
                       href="https://revolution.themepunch.com/direct-customer-benefits/" target="_blank"			 id="slide-67-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="button"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"
                       style="z-index: 21; white-space: nowrap; cursor:pointer;text-decoration: none;">DISCOVER NOW </a> </li>
                <li data-index="rs-66" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="600"  data-thumb="../../assets/{{asset('assets/site/images/deskbg-100x50.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent"> <img src="{{asset('assets/site/images/hero2.jpg')}}"  alt="Image"  data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-9"
                         data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']"
                         data-width="['250','250','150','150']"
                         data-height="['150','150','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-10"
                         data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']"
                         data-width="['150','150','100','100']"
                         data-height="['200','150','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-29"
                         data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']"
                         data-width="['250','250','150','150']"
                         data-height="['150','150','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-12"
                         data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']"
                         data-width="['250','250','100','100']"
                         data-height="150"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-34"
                         data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']"
                         data-width="['300','300','150','150']"
                         data-height="['200','200','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-11"
                         data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']"
                         data-width="150"
                         data-height="['250','150','50','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-27"
                         data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']"
                         data-width="['250','250','150','150']"
                         data-height="['300','300','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-28"
                         data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']"
                         data-width="['300','300','150','150']"
                         data-height="['250','250','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-30"
                         data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']"
                         data-width="['300','300','150','200']"
                         data-height="['250','250','150','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-31"
                         data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']"
                         data-width="['300','300','150','150']"
                         data-height="['250','250','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-32"
                         data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']"
                         data-width="['300','300','150','150']"
                         data-height="['200','200','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-33"
                         data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']"
                         data-width="['450','400','250','250']"
                         data-height="['100','100','50','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-66-layer-35"
                         data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']"
                         data-width="['350','400','250','250']"
                         data-height="['100','100','50','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper "
                         id="slide-66-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-width="full"
                         data-height="full"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-basealign="slide"
                         data-responsive_offset="off"
                         data-responsive="off"
                         data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption main-title   tp-resizeme"
                         id="slide-66-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']"
                         data-fontsize="['90','90','70','50']"
                         data-lineheight="['90','90','70','50']"
                         data-width="['none','none','481','360']"
                         data-height="none"
                         data-whitespace="['nowrap','nowrap','normal','normal']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 19; white-space: nowrap; font-size: 90px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: -5px;">Discover & Explorer<br/>
                        New Paths </div>
                    <div class="tp-caption   tp-resizeme"
                         id="slide-66-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']"
                         data-fontsize="['25','25','25','20']"
                         data-lineheight="['35','35','35','30']"
                         data-width="['480','480','480','360']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">Champions for lowercase internet were already having a banner </div>
                    <a class="tp-caption rev-btn  tp-resizeme"
                       href="https://revolution.themepunch.com/direct-customer-benefits/" target="_blank"			 id="slide-66-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="button"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"
                       style="z-index: 21; white-space: nowrap; cursor:pointer;text-decoration: none;">LEARN MORE</a> </li>
                <li data-index="rs-68" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="600"  data-thumb="{{asset('assets/site/images/reachout_bg-100x50.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent"> <img src="{{asset('assets/site/images/hero3.jpg')}}"  alt="Image"  data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-9"
                         data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']"
                         data-width="['250','250','150','150']"
                         data-height="['150','150','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-10"
                         data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']"
                         data-width="['150','150','100','100']"
                         data-height="['200','150','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-29"
                         data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']"
                         data-width="['250','250','150','150']"
                         data-height="['150','150','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-12"
                         data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']"
                         data-width="['250','250','100','100']"
                         data-height="150"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-34"
                         data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']"
                         data-width="['300','300','150','150']"
                         data-height="['200','200','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-11"
                         data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']"
                         data-width="150"
                         data-height="['250','150','50','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-27"
                         data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']"
                         data-width="['250','250','150','150']"
                         data-height="['300','300','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-28"
                         data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']"
                         data-width="['300','300','150','150']"
                         data-height="['250','250','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-30"
                         data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']"
                         data-width="['300','300','150','200']"
                         data-height="['250','250','150','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-31"
                         data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']"
                         data-width="['300','300','150','150']"
                         data-height="['250','250','100','100']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-32"
                         data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']"
                         data-width="['300','300','150','150']"
                         data-height="['200','200','150','150']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="300"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-33"
                         data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']"
                         data-width="['450','400','250','250']"
                         data-height="['100','100','50','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-68-layer-35"
                         data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']"
                         data-width="['350','400','250','250']"
                         data-height="['100','100','50','50']"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-slicey_offset="250"
                         data-slicey_blurstart="0"
                         data-slicey_blurend="20"
                         data-responsive_offset="on"
                         data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper "
                         id="slide-68-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-width="full"
                         data-height="full"
                         data-whitespace="nowrap"
                         data-type="shape"
                         data-basealign="slide"
                         data-responsive_offset="off"
                         data-responsive="off"
                         data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);"> </div>
                    <div class="tp-caption main-title   tp-resizeme"
                         id="slide-68-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']"
                         data-fontsize="['90','90','70','50']"
                         data-lineheight="['90','90','70','50']"
                         data-width="['none','none','481','360']"
                         data-height="none"
                         data-whitespace="['nowrap','nowrap','normal','normal']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 19; white-space: nowrap; font-size: 90px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: -5px; ">Part of the Neural <br/>
                        Universe </div>
                    <div class="tp-caption   tp-resizeme"
                         id="slide-68-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']"
                         data-fontsize="['25','25','25','20']"
                         data-lineheight="['35','35','35','30']"
                         data-width="['480','480','480','360']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px; ">How we think about and make use of words can have a profound impact </div>
                    <a class="tp-caption rev-btn  tp-resizeme"
                       href="http://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/2751380?ref=themepunch&license=regular&open_purchase_for_item_id=2751380&purchasable=source" target="_blank"			 id="slide-68-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="button"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"
                       style="z-index: 21; white-space: nowrap; cursor:pointer;text-decoration: none;">GET QUOTE NOW</a> </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 3px; background:#8a39ee"></div>
        </div>
    </div>
    <!-- end revslider -->
<section class="highlights">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h6>interoperable with Infinite Scroll</h6>
                <h2>Financer Team Refined Your Brand, Creating a <i>Beautifull</i> & <i>Usefull</i> Solutitons</h2>
            </div>
            <!-- end col-12 -->
            <div class="col-md-2 col-md-offset-3 col-sm-4 col-xs-12"> <img src="{{asset('assets/site/images/icon1.jpg')}}" alt="Image">
                <h4>TRADING TIPS</h4>
                <p>General programming advice doled out invariably seems</p>
            </div>
            <!-- end col-2 -->
            <div class="col-md-2 col-sm-4 col-xs-12"> <img src="{{asset('assets/site/images/icon2.jpg')}}" alt="Image">
                <h4>MONEY TRANSFERS</h4>
                <p>The book Clean Code  considered something of a programming</p>
            </div>
            <!-- end col-2 -->
            <div class="col-md-2 col-sm-4 col-xs-12"> <img src="{{asset('assets/site/images/icon3.jpg')}}" alt="Image">
                <h4>INTERNATIONAL </h4>
                <p>There’s too much going on in there at too many different levels</p>
            </div>
            <!-- end col-2 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end highlights -->
<section class="video-intro transition">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h6>Infinite Scroll</h6>
                <h2>Beautiful & Usefull Solutitons</h2>
                <p>Weeks after police busted an attempted Tai Chi versus MMA mass brawl.</p>
                <a href="{{asset('assets/site/videos/video.mp4')}}" class="watch-btn fancybox" data-type="iframe" >WATCH TRAILER</a> </div>
            <!-- end col-6 -->
            <div class="col-md-6 col-md-offset-2">
                <div class="video"><img src="{{asset('assets/site/images/video-image.jpg')}}" alt="Image"> <a href="{{asset('assets/site/videos/video.mp4')}}" class="play-btn fancybox" data-type="iframe" ><i class="fa fa-play" aria-hidden="true"></i></a> </div>
                <!-- end video -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end video-intro -->
<section class="intro transition">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h6>interoperable with Infinite Scroll</h6>
                <h2>Financer Team Refined Your Brand, Creating a <i>Beautifull</i> & <i>Usefull</i> Solutitons</h2>
                <a href="#">LEARN MORE</a> </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end intro -->
<section class="featured-services transition">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h6>interoperable with Infinite Scroll</h6>
                <h2>Financer Team Refined</h2>
            </div>
            <!-- end col-4 -->
            <div class="col-md-8  col-sm-12 col-xs-12">
                <div class="row inner">
                    <div class="col-md-6 col-sm-6 col-xs-12"> <i class="flaticon-001-wallet-1" aria-hidden="true"></i>
                        <h4>MARKETTING</h4>
                        <p>Strange strings and odd function calls mixed in with codes.</p>
                    </div>
                    <!-- end col-6 -->
                    <div class="col-md-6 col-sm-6 col-xs-12"> <i class="flaticon-010-pie-chart" aria-hidden="true"></i>
                        <h4>CONSULTATION</h4>
                        <p>The chapter briefly ponders what qualities would make the code.</p>
                    </div>
                    <!-- end col-6 -->
                    <div class="col-md-6 col-sm-6 col-xs-12"> <i class="flaticon-019-credit-card-1" aria-hidden="true"></i>
                        <h4>ACCOUNTING</h4>
                        <p>Before declaring that making the function smaller will achieve.</p>
                    </div>
                    <!-- end col-6 -->

                    <div class="col-md-6 col-sm-6 col-xs-12"><i class="flaticon-022-pound-sterling-1" aria-hidden="true"></i>
                        <h4>TRADEMARKS</h4>
                        <p>Second rule of functions is that they should be smaller than that is.</p>
                    </div>
                    <!-- end col-6 -->
                    <div class="col-md-6 col-sm-6 col-xs-12"> <i class="flaticon-038-money-3" aria-hidden="true"></i>
                        <h4>TAX & PAYS</h4>
                        <p>Functions should be small is something that is almost considered.</p>
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row inner -->
            </div>
            <!-- end col-8 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end featured-services -->
<section class="featured-solutions transition">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h6>Infinite Scroll</h6>
                <h2>Financer Team Refined Your Brand, Creating a Beautifull & Usefull Solutitons</h2>
            </div>
            <!-- end col-12 -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="solution-box">
                    <figure class="image"><img src="{{asset('assets/site/images/hero1.jpg')}}" alt="Image"></figure>
                    <!-- end image -->
                    <h4>Tax & Payments</h4>
                    <p>We’ve been using Financer to prototype designs quickly and efficiently. Needless to say we’re hugely impressed by the style and value.</p>
                </div>
                <!-- end solution-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="solution-box">
                    <figure class="image"><img src="{{asset('assets/site/images/hero2.jpg')}}" alt="Image"></figure>
                    <!-- end image -->
                    <h4>Insurance</h4>
                    <p>We’ve been using Financer to prototype designs quickly and efficiently. Needless to say we’re hugely impressed by the style and value.</p>
                </div>
                <!-- end solution-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="solution-box">
                    <figure class="image"><img src="{{asset('assets/site/images/hero3.jpg')}}" alt="Image"></figure>
                    <!-- end image -->
                    <h4>Legal Advices</h4>
                    <p>We’ve been using Financer to prototype designs quickly and efficiently. Needless to say we’re hugely impressed by the style and value.</p>
                </div>
                <!-- end solution-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-xs-12 text-center"> <a href="#">LOAD MORE</a> </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end featured-solutions -->
<section class="quote transition">
    <div class="video-bg">
        <video src="{{asset('assets/site/videos/video.mp4')}}" muted loop autoplay></video>
    </div>
    <!-- end video-bg -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h6>Infinite Scroll</h6>
                <h2>Get Your Potential of Business Creating a Beautifull & Usefull Solutitons</h2>
                <a href="#">LEARN MORE</a> </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end quote -->
<section class="featured-projects transition">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h6>RECENT PROJECTS</h6>
                <h2>Our Highlight Showcases</h2>
            </div>
            <!-- end col-12 -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <figure class="project-box"> <img src="{{asset('assets/site/images/project1.jpg')}}" alt="Image">
                    <figcaption>
                        <h4>Apple Inc</h4>
                        <small>Business Development & Increased</small> </figcaption>
                </figure>
                <!-- end project-box -->
            </div>
            <!-- end col-6 -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <figure class="project-box"> <img src="{{asset('assets/site/images/project2.jpg')}}" alt="Image">
                    <figcaption>
                        <h4>Mengerler A.S</h4>
                        <small>Digital Solutions & Improvements</small> </figcaption>
                </figure>
                <!-- end project-box -->
                <div class="row inner">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <figure class="project-box"> <img src="{{asset('assets/site/images/project3.jpg')}}" alt="Image">
                            <figcaption>
                                <h4>Borusan</h4>
                                <small>Ideas & Creativity</small> </figcaption>
                        </figure>
                        <!-- end project-box -->
                    </div>
                    <!-- end col-6 -->
                    <div class="col-md-6  col-sm-6 col-xs-12">
                        <figure class="project-box"> <img src="{{asset('assets/site/images/project4.jpg')}}" alt="Image">
                            <figcaption>
                                <h4>Dogus</h4>
                                <small>Team Work Exercises</small> </figcaption>
                        </figure>
                        <!-- end project-box -->
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row inner -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end featured-projects -->
<section class="our-skills">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h6>Infinite Scroll</h6>
                <h2>Beautiful &amp; Usefull Solutitons</h2>
                <p>Weeks after police busted an attempted Tai Chi versus MMA mass brawl.</p>
                <a href="#">LEARN MORE</a> </div>
            <!-- end col-4 -->
            <div class="col-md-6 col-md-offset-2">
                <div class="our-progress"> <img src="{{asset('assets/site/images/project6.jpg')}}" alt="Image" class="image">
                    <div class="progress-infos"><small>2015 Team Work</small> <small class="pull-right">75%</small> </div>
                    <!-- end progress-infos -->
                    <div class="progress">
                        <div class="progress-bar wow first" style="width:1%;"> </div>
                        <!-- end progress-bar -->
                    </div>
                    <!-- end progress -->
                    <div class="progress-infos"><small>2016 Business Increase</small> <small class="pull-right">91%</small> </div>
                    <!-- end progress-infos -->
                    <div class="progress">
                        <div class="progress-bar wow second" style="width:1%;"> </div>
                        <!-- end progress-bar -->
                    </div>
                    <!-- end progress -->
                    <div class="progress-infos"><small>2017 New Partners</small> <small class="pull-right">88%</small> </div>
                    <!-- end progress-infos -->
                    <div class="progress">
                        <div class="progress-bar wow third" style="width:1%;"> </div>
                        <!-- end progress-bar -->
                    </div>
                    <!-- end progress -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
</section>
<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h6>HAPPY CLIENTS</h6>
                <h2>Testimonials from our proudly clients</h2>
            </div>
            <!-- end col-12 -->
            <div class="col-xs-12">
                <div class="owl-slider">
                    <div><div class="testimonial-box">
                            <figure class="head"> <img src="{{asset('assets/site/images/headshot1.jpg')}}" alt="Image"> </figure>
                            <h5>Velcom Communication</h5>
                            <small>Jessica Carter (Company CEO)</small> <span class="rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia numquam eius modi. Neque porro quisquam est.</p>
                        </div>
                        <!-- end testimonial-box --> </div>
                    <!-- end div -->
                    <div><div class="testimonial-box">
                            <figure class="head"> <img src="{{asset('assets/site/images/headshot2.jpg')}}" alt="Image"> </figure>
                            <h5>KyevStar Mobile</h5>
                            <small>Maria Slovenia (Marketting Manager)</small> <span class="rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia numquam eius modi. Neque porro quisquam est.</p>
                        </div>
                        <!-- end testimonial-box --> </div>
                    <!-- end div -->
                    <div><div class="testimonial-box">
                            <figure class="head"> <img src="{{asset('assets/site/images/headshot3.jpg')}}" alt="Image"> </figure>
                            <h5>Zegna Clothes</h5>
                            <small>Nathalia McPorter (Business Developer)</small> <span class="rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia numquam eius modi. Neque porro quisquam est.</p>
                        </div>
                        <!-- end testimonial-box --> </div>
                    <!-- end div -->
                </div>
                <!-- end owl-slider -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end testimonials -->
<section class="left-side-content transition">
    <div class="side-image"> <img src="{{asset('assets/site/images/side-image1.jpg')}}" alt="Image" class="bg-image">
    </div>
    <!-- end side-image -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h6>LEARN MORE </h6>
                <h2>About SIP Calling in Our Voip</h2>
                <p>Session Initiation Protocol, or SIP, is an Internet Protocol used to initiate or terminate live communication sessions. These may include anything from instant messages, to phone and video calls, to interactive multimedia conferences.</p>
                <a href="#">LEARN MORE</a> </div>
            <!-- end col-6 -->
            <div class="col-md-6 col-md-offset-2">
                <div class="content-image"><img src="{{asset('assets/site/images/side-image1.jpg')}}" alt="Image"> </div>
                <!-- end content-image -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end left-side-content -->
<section class="right-side-content transition">
    <div class="side-image"> <img src="{{asset('assets/site/images/side-image2.jpg')}}" alt="Image" class="bg-image">
    </div>
    <!-- end side-image -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-image"><img src="{{asset('assets/site/images/side-image2.jpg')}}" alt="Image"> </div>
                <!-- end content-image -->
            </div>
            <!-- end col-6 -->
            <div class="col-md-4 col-md-offset-2">
                <h6>LEARN MORE </h6>
                <h2>About SIP Calling in Our Voip</h2>
                <p>Session Initiation Protocol, or SIP, is an Internet Protocol used to initiate or terminate live communication sessions. These may include anything from instant messages, to phone and video calls, to interactive multimedia conferences.</p>
                <a href="#">LEARN MORE</a> </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end right-side-content -->
<section class="left-side-content transition">
    <div class="side-image"> <img src="{{asset('assets/site/images/side-image3.jpg')}}" alt="Image" class="bg-image">
    </div>
    <!-- end side-image -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h6>LEARN MORE </h6>
                <h2>About SIP Calling in Our Voip</h2>
                <p>Session Initiation Protocol, or SIP, is an Internet Protocol used to initiate or terminate live communication sessions. These may include anything from instant messages, to phone and video calls, to interactive multimedia conferences.</p>
                <a href="#">LEARN MORE</a> </div>
            <!-- end col-6 -->
            <div class="col-md-6 col-md-offset-2">
                <div class="content-image"><img src="{{asset('assets/site/images/side-image3.jpg')}}" alt="Image"> </div>
                <!-- end content-image -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end left-side-content -->
<section class="work-process transition">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h6>WORK PROCESS</h6>
                <h2>Steps by step from our proudly process</h2>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
        <div class="circles">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 text-left">
                    <div class="icon-border"> <i class="flaticon-001-wallet-1"></i> <span>IDEA</span> </div>
                    <!-- end icon-border -->
                </div>
                <!-- end col-4 -->
                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                    <div class="icon-border"> <i class="flaticon-019-credit-card-1"></i> <span>EXECUTION</span> </div>
                    <!-- end icon-border -->
                </div>
                <!-- end col-4 -->
                <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                    <div class="icon-border"> <i class="flaticon-094-money-bag-2"></i> <span>RESULT</span> </div>
                    <!-- end icon-border -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end circles -->
    </div>
    <!-- end container -->
</section>
<!-- end work-process -->
<section class="work-us transition">
    <h6>Start Work With Us ?</h6>
    <h2>Tell Us About Your Project Story and Project Brief</h2>
    <a href="#">START A PROJECT</a> </section>
<!-- end work-us -->
    @if(count($bposts)>0)
<section class="latest-news transition">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>{{News}}</h2>
            </div>
            <!-- end col-12 -->
            <!-- end col-6 -->
            @foreach($bposts as $post)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="news-box"> <small>{{$post->bCategory->name}}</small>
                    <h4>{{$post->title}}</h4>
                    <span>{{$post->created_at}}</span>
                    <p>{{ Str::limit(strip_tags($post->description), 100) }}</p>
                    <a href="{{route('site.new.detail',$post->slug)}}">{{Read_More}}</a> </div>
                <!-- end news-box -->
            </div>
            @endforeach
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
    @endif
<!-- end latest-news -->
<section class="get-quote transition">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12">
                <h6>INFINITE SCROLL</h6>
                <h2>Get Some Information</h2>
                <form>
                    <input type="text" placeholder="Your name" class="first">
                    <input type="text" placeholder="Your e-mail" class="second">
                    <input type="text" placeholder="Subject">
                    <textarea placeholder="Your message"></textarea>
                    <button type="submit">SEND NOW</button>
                </form>
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end get-quote -->
<section class="support-bar transition">
    <div class="container">
        <div class="row">
            <div class="col-xs-12"> <a href="#">GET IN TOUCH</a> <img src="{{asset('assets/site/images/icon-support.png')}}" alt="Image">
                <h4>Have any Question?</h4>
                <h6>We're here to help. Send us an email or call us at +38 075 92 47</h6>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end support-bar -->

@endsection
