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
        <h1 class="h2">Product</h1>

        <div class="btn-toolbar mb-2 mb-md-0">

            <div class="btn-group me-2 ">
                <a href="{{route("add-product")}}" class="btn btn-sm btn-outline-secondary">Add Product</a>
            </div>
            <div>
                <select class="form-select form-select-sm  " aria-label=".form-select-sm example">
                    <option disabled selected>Categories</option>
                    <option>All</option>
                    @foreach($cat as $key => $value)
                    <option value="{{$value->id}}">{{$value->category}}</option>

                    @endforeach
                </select>
            </div>
        </div>
    </div>
    @if(session("status"))
    <div class="alert alert-{{ session('status')[1] }} alert-dismissible fade show" role="alert">
        {{ session('status')[0] }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div>
        <div class="table-responsive">
            <table class=" table table-bordered table-light align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Code</th>
                        <th style="width:20% " scope="col">Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $value)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$value->code}}</td>
                        <td style="text-align: center">
                            <img src="{{asset(Storage::url($value->image)) }}" class="" style="height: 120px; width:120px;" alt="">
                        </td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->productCategory->category}}</td>
                        <td>

                            <form class="d-inline" action="{{route("delete-product",$value->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach




                </tbody>
            </table>
        </div>
    </div>


    </div>


</main>
@endsection
