<footer class="footer transition">
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
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
                        @if($global_setting_data->linkedin)
                            <li><a href="{{$global_setting_data->linkedin}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        @endif
                    </ul>
                    </ul>
                    <!-- end social-media -->
                </div>
                <!-- end col-6 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <address>
                        <i class="fa fa-phone" aria-hidden="true"></i> {{$global_setting_data->phone}} <small>{{Text_Call}}</small>
                    </address>
                </div>
                <!-- end col-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <address>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> {{$global_setting_data->address}}
                    </address>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end footer-bar -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h4 class="footer-title">{{NEWSLETTER}}</h4>
                <form class="newsletter">
                    <input type="text" placeholder="Your e-mail">
                    <button type="submit">{{SUBMIT}}</button>
                </form>
                @if($global_setting_data->company_desc)
                <h4 class="footer-title">{{$global_setting_data->site_title}}</h4>
                <p>{{$global_setting_data->company_desc}}</p>
                @endif
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h4 class="footer-title">{{PROMO_VIDEO}}</h4>
                <div class="video"><img src="{{asset('assets/site/images/video-image.jpg')}}" alt="Image"> <a href="{{asset('assets/site/videos/video.mp4')}}" class="play-btn fancybox" data-type="iframe" ><i class="fa fa-play" aria-hidden="true"></i></a> </div>
                <!-- end video --> </div>
            <!-- end col-4 -->
            <div class="col-md-4">
                <h4 class="footer-title">{{OUR_SERVICES}}</h4>
                <ul class="footer-menu">
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Strategy</a></li>
                    <li><a href="#">Team Work</a></li>
                    <li><a href="#">Laws & Terms </a></li>
                    <li><a href="#">Parnertships</a></li>
                    <li><a href="#">Marketting</a></li>
                    <li><a href="#">Management</a></li>
                    <li><a href="#">Accounting</a></li>
                    <li><a href="#">Training</a></li>
                    <li><a href="#">Consultation</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Investment</a></li>
                </ul>
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">Copyright © {{$global_setting_data->created_at->format('Y')}} , {{$global_setting_data->site_title}} All Rights Reserved</div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end sub-footer -->
</footer>
