@extends('castle.castle_master')
@section('title','Blog Kategorisi Düzenle')
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
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header py-3 bg-transparent">
                        <h5 class="mb-0">@yield('title')</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" action="{{route('castle.bcategory.update')}}" method="post" >
                                @csrf
                                <input type="hidden" name="id" value="{{$bcategoryFind->id}}">
                                <div class="col-12">
                                    <label class="form-label">Language</label>
                                    <select class="form-select mb-3" name="language_id" aria-label="Default select example">
                                        @foreach($languages as $language )
                                            <option value="{{$language->id}}"{{$language->id == $bcategoryFind->language_id ? "selected" : ""}}>{{$language->name}}</option>
                                        @endforeach
                                    </select>
                                    @error("language_id")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$bcategoryFind->name}}" placeholder="Başlık">
                                    @error("name")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Status</label>
                                    <select class="form-select mb-3" name="status">
                                        <option value="1" {{$bcategoryFind->status == 1 ? "selected" : ""}}>Active</option>
                                        <option value="0" {{$bcategoryFind->status == 0 ? "selected" : ""}}>Passive</option>
                                    </select>
                                    @error("status")
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
