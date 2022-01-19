@extends('admin.layout.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="chartjs-size-monitor">
        <div class="chartjs-size-monitor-expand">
            <div class=""></div>
        </div>
        <div class="chartjs-size-monitor-shrink">
            <div class=""></div>
        </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#categoryModal">Add Category</button>
            </div>

        </div>
    </div>
    @if(session("status"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div>
        <div class="table-responsive">
            <table class=" table table-bordered table-light align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th style="width:20% " scope="col">Image</th>
                        <th scope="col">Category Name</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $value)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td style="text-align: center">
                            <img src="{{ asset(Storage::url($value->cat_img)) }}" class="obj-cover" style="height: 150px; width:150px;" alt="">
                        </td>
                        <td>{{$value->category}}</td>

                        <td>

                            {{-- <form class="d-inline" action="" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form> --}}

                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>


    </div>

    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">Add new category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route("new-categories")}}" id="addForm" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="liveAlertPlaceholder"></div>

                        <div class="container">

                            @csrf
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control " id="categoryName" name="categoryName" value="" required>
                            <div class="mt-3">
                                <label for="formFile" class="form-label">Category Image (Max file size: 2MB) </label>
                                <input class="form-control" type="file" id="formFile" name="categoryImage" required>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
