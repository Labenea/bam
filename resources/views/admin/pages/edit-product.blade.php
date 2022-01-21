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
        <h1 class="h2">New Product</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            {{-- <div class="btn-group me-2">

                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#categoryModal">Add Category</button>
            </div> --}}

        </div>
    </div>
    @if(session("status"))
    <div class="alert alert-{{session("status")[1]}} alert-dismissible fade show" role="alert">
        {{ session('status')[0] }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="py-2">
        <form action="{{route('save-edit-product',$data->code)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Product Title</label>
                    <input type="text" required class="form-control" value="{{$data->name}}" id="titleInput" name="title">
                </div>
                <div class="mb-3">
                    <label for="productCode" class="form-label">Product Code</label>
                    <input type="text" required class="form-control" value="{{$data->code}}" id="productCode" name="productCode">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category" required aria-label="Default select example">
                        <option selected="" disabled="">Choose Product Category</option>
                        @foreach($cat as $key => $value)
                        <option @if ($value->id = $data->category_id) selected @endif value="{{$value->id}}">{{$value->category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="imageForm" class="form-label">Product Picture (Kosongkan jika tidak ingin mengganti gambar)</label>
                    <input class="form-control"  type="file" id="imageForm" name="imageForm">
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="specification" class="form-label">Specification</label>
                        <textarea id="editor" required name="specification">
                            {!!$data->specification!!}
                        </textarea>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>


    </div>


</main>
@endsection
