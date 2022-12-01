@extends('castle.castle_master')
@section('title','Smtp Settings')
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
                            <form class="row g-3" action="{{route('castle.smtp.update')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$smtpFind->id}}">
                                <div class="col-12">
                                    <label class="form-label">Smtp Host</label>
                                    <input type="text" name="smtp_host" class="form-control" value="{{$smtpFind->smtp_host}}" placeholder="Smtp Host">
                                    @error("smtp_host")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Smtp Port</label>
                                    <input type="text" name="smtp_port" class="form-control" value="{{$smtpFind->smtp_port}}" placeholder="Smtp Port">
                                    @error("smtp_port")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Smtp Email</label>
                                    <input type="text" name="smtp_mail" class="form-control" value="{{$smtpFind->smtp_mail}}" placeholder="Smtp Email">
                                    @error("smtp_mail")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Smtp Password</label>
                                    <input type="text" name="smtp_pass" class="form-control" value="{{$smtpFind->smtp_pass}}">
                                    @error("smtp_pass")
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
