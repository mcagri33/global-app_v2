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
@include('castle.layouts.alert')
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header py-3 bg-transparent">
                        <h5 class="mb-0">@yield('title')</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" action="{{route('castle.bpost.update')}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <input type="hidden" name="id" value="{{$postFind->id}}">
                                <input type="hidden" name="old_img" value="{{$postFind->old_img}}">
                                <div class="col-12">
                                    <label class="form-label">Language</label>
                                    <select class="form-select mb-3" name="language_id">
                                        @foreach($languages as $language )
                                            <option value="{{$language->id}}"{{$language->id == $postFind->language_id ? "selected" : ""}}>{{$language->name}}</option>
                                        @endforeach
                                    </select>
                                    @error("language_id")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Categories</label>
                                    <select class="form-select mb-3" name="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category )
                                            <option value="{{$category->id}}" {{$category->id == $postFind->category_id ? "selected" : "" }}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error("category_id")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <img src="{{asset($postFind->image)}}" style="height: 100px; width: 100px">
                                <div class="col-12">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    @error("image")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$postFind->title}}" placeholder="Başlık">
                                    @error("title")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="ckeditor form-control" name="description">{{$postFind->description}}</textarea>
                                    @error("description")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Tag</label>
                                    <input type="text" class="form-control" data-role="tagsinput" name="tag" value="{{$postFind->tag}}">
                                    @error("tag")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Status</label>
                                    <select class="form-select mb-3" name="status">
                                        <option value="1" {{$postFind->status == 1 ? "selected" : ""}}>Active</option>
                                        <option value="0" {{$postFind->status == 0 ? "selected" : ""}}>Passive</option>
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
