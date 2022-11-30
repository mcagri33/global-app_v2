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
                @foreach($posts as $p)
                        <div class="col-md-4">
                            <div class="news-box"><small>{{$p->bCategory->name}}</small>
                                <h4>{{$p->title}}</h4>
                                <span>{{$p->created_at->format('F Y')}}</span>
                                <p>{{ Str::limit(strip_tags($p->description), 100) }}</p>
                                <a href="{{route('site.new.detail',$p->slug)}}">{{Read_More}}</a>
                            </div>
                        <!-- end news-box -->
                    </div>
                @endforeach
                <!-- end col-3 -->
                <!-- end col-3 -->
                <div class="col-xs-12 text-center">
                    {!! $posts->links() !!}
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    {{-- <input type="hidden" id="start" value="0">


     <!-- Script -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script type="text/javascript">

         checkWindowSize();

         // Check if the page has enough content or not. If not then fetch records
         function checkWindowSize(){
             if($(window).height() >= $(document).height()){
                 // Fetch records
                 fetchData();
             }
         }

         // Fetch records
         function fetchData(){
             var start = Number($('#start').val());
             var allcount = Number($('#totalrecords').val());
             var rowperpage = Number($('#rowperpage').val());
             start = start + rowperpage;

             if(start <= allcount){
                 $('#start').val(start);

                 $.ajax({
                     url:"{{route('getPosts')}}",
                     data: {start:start},
                     dataType: 'json',
                     success: function(response){

                         // Add
                         $(".post:last").after(response.html).show().fadeIn("slow");

                         // Check if the page has enough content or not. If not then fetch records
                         checkWindowSize();
                     }
                 });
             }
         }

         $(document).on('touchmove', onScroll); // for mobile

         function onScroll(){

             if($(window).scrollTop() > $(document).height() - $(window).height()-100) {

                 fetchData();
             }
         }

         $(window).scroll(function(){

             var position = $(window).scrollTop();
             var bottom = $(document).height() - $(window).height();

             if( position == bottom ){
                 fetchData();
             }

         });

     </script>--}}
@endsection
