@extends('site.site_master')
@section('title')
    {{NEWS}}
@endsection

@section('site')
    @include('site.layouts.header')
    <section class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('site.index')}}">{{HOME}}</a></li>
                        <li class="active">@yield('title')</li>
                    </ul>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="news">
        <div class="container">

            <div class="row">
                <!-- end col-3 -->
                @foreach($post as $p)
                <div class="col-md-3">
                    <div class="news-box"> <small>{{$p->bCategory->name}}</small>
                        <h4>{{$p->title}}</h4>
                        <span>{{$p->created_at->format('F Y')}}</span>
                        <p>{{ Str::limit(strip_tags($p->description), 100) }}</p>
                        <a href="{{route('site.new.detail',$p->slug)}}">{{Read_More}}</a> </div>
                    <!-- end news-box -->
                </div>
                @endforeach
                <!-- end col-3 -->
                <!-- end col-3 -->
                <div class="col-xs-12 text-center">
                    <button class="see-more" data-page="2" data-link="{{url('news/post?page=')}}" data-div="#posts">{{LOAD_MORE}}</button>

                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <script>
        $(".see-more").click(function() {
            $div = $($(this).data('div')); //div to append
            $link = $(this).data('link'); //current URL

            $page = $(this).data('page'); //get the next page #
            $href = $link + $page; //complete URL
            $.get($href, function(response) { //append data
                $html = $(response).find("#posts").html();
                $div.append($html);
            });

            $(this).data('page', (parseInt($page) + 1)); //update page #
        });
    </script>
@endsection
