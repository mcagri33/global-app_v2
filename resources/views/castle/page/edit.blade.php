@extends('castle.castle_master')
@section('title','Page Edit')
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
                            <form class="row g-3" action="{{route('castle.page.update')}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <input type="hidden" name="id" value="{{$pageFind->id}}">
                                <input type="hidden" name="old_img" value="{{$pageFind->old_img}}">
                                <div class="col-12">
                                    <label class="form-label">Language</label>
                                    <select class="form-select mb-3" name="language_id">
                                        @foreach($languages as $language )
                                            <option value="{{$language->id}}" {{$pageFind->language_id == $language->id ? "selected" : ""}}>{{$language->name}}</option>
                                        @endforeach
                                    </select>
                                    @error("language_id")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <img src="{{asset($pageFind->banner)}}" style="width: 100px; height: 100px;">
                                <div class="col-12">
                                    <label class="form-label">Banner</label>
                                    <input type="file" class="form-control" name="banner">
                                    @error("banner")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Page Name</label>
                                    <input type="text" class="form-control" name="page_name" value="{{$pageFind->page_name}}"
                                           placeholder="Page Name">
                                    @error("page_name")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Content</label>
                                    <textarea class="ckeditor form-control" name="page_content">{{$pageFind->page_content}}</textarea>
                                    @error("page_content")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Tag</label>
                                    <input type="text" class="form-control" data-role="tagsinput" name="meta_name" value="{{$pageFind->meta_name}}">
                                    @error("meta_name")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Meta Description</label>
                                    <input type="text" class="form-control" name="meta_desc" value="{{$pageFind->meta_desc}}"
                                           placeholder="Meta Description">
                                    @error("meta_desc")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option value="1" {{$pageFind->status = 1 ? "selected" : ""}}>Active</option>
                                        <option value="0" {{$pageFind->status = 0 ? "selected" : ""}}>Passive</option>
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
