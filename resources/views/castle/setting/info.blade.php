@extends('castle.castle_master')
@section('title','Site İnfo')
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
                            <form class="row g-3" action="{{route('castle.info.update')}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <input type="hidden" name="id" value="{{$infoFind->id}}">
                                <input type="hidden" name="old_img" value="{{$infoFind->old_img}}">

                                <img src="{{asset($infoFind->logo)}}" style="height: 100px; width: 100px">
                                <div class="col-12">
                                    <label class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="logo">
                                    @error("logo")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <img src="{{asset($infoFind->favicon)}}" style="height: 100px; width: 100px">
                                <div class="col-12">
                                    <label class="form-label">Favicon</label>
                                    <input type="file" class="form-control" name="favicon">
                                    @error("favicon")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Site Title</label>
                                    <input type="text" name="site_title" class="form-control" value="{{$infoFind->site_title}}" placeholder="Site Title">
                                    @error("site_title")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Company Description</label>
                                    <input type="text" name="company_desc" class="form-control" value="{{$infoFind->company_desc}}" placeholder="Company Description">
                                    @error("company_desc")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{$infoFind->email}}" placeholder="Email">
                                    @error("email")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Meta Name</label>
                                    <input type="text" name="meta_name" class="form-control" value="{{$infoFind->meta_name}}" placeholder="Meta Name">
                                    @error("meta_name")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Meta Description</label>
                                    <input type="text" name="meta_description" class="form-control" value="{{$infoFind->meta_description}}" placeholder="Meta Description">
                                    @error("meta_description")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" value="{{$infoFind->address}}" placeholder="Address">
                                    @error("address")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{$infoFind->phone}}" placeholder="Phone">
                                    @error("phone")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Fax</label>
                                    <input type="text" name="fax" class="form-control" value="{{$infoFind->fax}}" placeholder="Fax">
                                    @error("fax")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Gsm</label>
                                    <input type="text" name="gsm" class="form-control" value="{{$infoFind->gsm}}" placeholder="Gsm">
                                    @error("gsm")
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
