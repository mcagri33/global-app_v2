@extends('castle.castle_master')
@section('title','Dil Listesi')
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
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">@yield('title')</h5>

                    <form class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                        <input class="form-control ps-5" type="text" placeholder="search">
                    </form>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table align-middle">
                        <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Dil Adı</th>
                            <th>Dil Kısa Adı</th>
                            <th>Dil Çevirisi</th>
                            <th>Varsayılan</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($languages) > 0)
                        @foreach($languages as $language)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$language->name}}</td>
                                <td>{{$language->short_name}}</td>
                                <td>
                                    @if($language->is_default == 'Yes')
                                        Evet
                                    @else
                                        Hayır
                                    @endif
                                </td>
                                <td><a href="{{route('castle.translation.index',$language->id)}}" class="btn-primary">Dil Çeviri</a> </td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('castle.language.edit',$language->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Düzenle"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="{{route('castle.language.delete',$language->id)}}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sil"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <td>
                            <p style="text-align: center">Herhangi bir dil bulunamadı!</p>
                        </td>
                        @endif
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $languages->links() !!}
                    </div>
                </div>
            </div>
        </div>


    </main>

@endsection
