@extends('castle.castle_master')
@section('title','Social Media')
@section('castle')

    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">@yield('title')</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card-tools d-flex">
            <div class="d-inline-block mr-4">
                <select class="form-control lang languageSelect">
                    @foreach($langs as $lang)
                        <option value="{{$lang->id}}">{{$lang->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!--end breadcrumb-->
        @include('castle.layouts.alert')
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header py-3 bg-transparent">
                        <h5 class="mb-0">@yield('title')</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" action="{{route('castle.social.update')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$socialFind->id}}">
                                <div class="col-12">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" value="{{$socialFind->facebook}}" placeholder="Facebook">
                                    @error("facebook")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Youtube</label>
                                    <input type="text" name="youtube" class="form-control" value="{{$socialFind->youtube}}" placeholder="Youtube">
                                    @error("youtube")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" name="instagram" class="form-control" value="{{$socialFind->instagram}}" placeholder="Instagram">
                                    @error("instagram")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" name="twitter" class="form-control" value="{{$socialFind->twitter}}" placeholder="Twitter">
                                    @error("twitter")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Linkedin</label>
                                    <input type="text" name="linkedin" class="form-control" value="{{$socialFind->linkedin}}" placeholder="Linkedin">
                                    @error("linkedin")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

    </main>

@endsection
