@extends('castle.castle_master')
@section('title','Page')
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
        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">@yield('title')</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <form class="row g-3" action="{{route('castle.page.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Language</label>
                                        <select class="form-select mb-3" name="language_id">
                                            @foreach($languages as $language )
                                                <option value="{{$language->id}}">{{$language->name}}</option>
                                            @endforeach
                                        </select>
                                        @error("language_id")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Banner</label>
                                        <input type="file" class="form-control" name="banner">
                                        @error("banner")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Page Name</label>
                                        <input type="text" class="form-control" name="page_name" value="{{old('page_name')}}"
                                               placeholder="Page Name">
                                        @error("page_name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Content</label>
                                        <textarea class="ckeditor form-control" name="page_content"></textarea>
                                        @error("page_content")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Tag</label>
                                        <input type="text" class="form-control" data-role="tagsinput" name="meta_name" value="{{old('meta_name')}}">
                                        @error("meta_name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Meta Description</label>
                                        <input type="text" class="form-control" name="meta_desc" value="{{old('meta_desc')}}"
                                               placeholder="Meta Description">
                                        @error("meta_desc")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Passive</option>
                                        </select>
                                        @error("status")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        @if(count($pages)>0)
                                            <thead class="table-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Language</th>
                                                <th>Banner</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                            @foreach($pages as $page)
                                                <tr>
                                                    <td>{{$pages ->perPage()*($pages->currentPage()-1)+$count}}</td>
                                                    <?php $count++; ?>
                                                    <td>
                                                        @if($page->language_id)
                                                            {{$page->language->name}}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td><img src="{{asset($page->banner)}}" style="height: 100px; width: 100px;"></td>
                                                    <td>{{$page->page_name}}</td>
                                                    @if($page->status == 1)
                                                        <td><span class="badge rounded-pill bg-success">Active</span>
                                                        </td>
                                                    @else
                                                        <td><span class="badge rounded-pill bg-warning">Passive</span>
                                                        </td>
                                                    @endif
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3 fs-6">
                                                            <a href="{{route('castle.page.edit',$page->id)}}"
                                                               class="text-warning" data-bs-toggle="tooltip"
                                                               data-bs-placement="bottom" title=""
                                                               data-bs-original-title="Edit info" aria-label="Edit"><i
                                                                    class="bi bi-pencil-fill"></i></a>
                                                            <a href="{{route('castle.page.delete',$page->id)}}"
                                                               class="text-danger" data-bs-toggle="tooltip"
                                                               data-bs-placement="bottom" title=""
                                                               data-bs-original-title="Delete" aria-label="Delete"><i
                                                                    class="bi bi-trash-fill"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        @else
                                            No Data Found !
                                        @endif
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center">
                                    {!! $pages->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>

    </main>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
