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
                <div class="row"> <div class="col-md-6 col-sm-6 hidden-xs">
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
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- end social-media -->
                        @if(count($global_language_data)>1)
                        <div class="language"> <span>{{SELECT_LANG}}</span>
                            <form action="{{route('front_language')}}" method="post">
                                <select name="short_name" onchange="this.form.submit()">
                                    @foreach($global_language_data as $item)
                                        <option value="{{$item->short_name}}" {{$item->short_name == $current_short_name ? "selected" : ""}}>{{$item->name}}</option>
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
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#collapse-nav"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.html"> <img src="{{asset('assets/site/images/logo-light.png')}}" alt="Image" class="logo-light"> <img src="{{asset('assets/site/images/logo-dark.png')}}" alt="Image" class="logo-dark"><span class="since">25<br>
        <small>years</small></span> </a> </div>
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="collapse-nav">
                <ul class="top-menu visible-xs">
                    <li><a href="#">{{Career}}</a></li>
                    <li><a href="#">{{On_Press}}</a></li>
                    <li><a href="#">{{Support}}</a></li>
                </ul>
                <!-- end top-menu -->
                <ul class="nav navbar-nav">
                    <li><a href="{{route('site.index')}}">{{HOME}}</a></li>
                    <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle">{{COMPANY}}</a>
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
