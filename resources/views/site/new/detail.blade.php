@extends('site.site_master')
@section('title')
    {{$post->title}}
@endsection

@section('site')
    @include('site.layouts.header')
    <section class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('site.index')}}">{{HOME}}</a></li>
                        <li><a href="#">{{NEWS}}</a></li>
                        <li class="active">{{$post->title}}</li>
                    </ul>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h6>{{NEWS}}</h6>
                    <h2>{{$post->bCategory->name}}</h2>
                </div>
                <!-- end col-12 -->
                <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
                    <div class="post">
                        <figure class="post-image"> <img src="{{$post->image}}" alt="Image"> </figure>
                        <!-- end post-image -->
                        <div class="post-content">
                            <div class="post-metas">
                                <div class="author"> <span class="post-date">{{$post->created_at->format('F Y')}}</span> </div>
                                <!-- end author -->
                            </div>
                            <!-- end post-metas -->
                            <h3 class="post-title"><a href="{{route('site.new.detail',$post->slug)}}">{{$post->title}}</a></h3>
                            <p class="paragraph"> {!! html_entity_decode($post->description) !!} </p>
                        </div>
                        <!-- end post-content -->
                    </div>
                </div>
                <!-- end col-8 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
