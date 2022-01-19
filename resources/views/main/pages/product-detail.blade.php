@extends('main.layout.app')

@section('content')
<div class="py-5 container navbar-compen">
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset(Storage::url($data->image)) }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <div class="py-4">
                <h4 class="blue-700 mb-3">{{$data->name}}</h4>
                <table class="table table-primary table-striped">
                    <tr>
                        <th>CODE</th>
                    </tr>
                    <tr>
                        <td>{{$data->code}}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                    </tr>
                    <tr>
                        <td>{{$data->productCategory->category}}</td>
                    </tr>
                    <tr>
                        <th>Specification</th>
                    </tr>
                    <tr>
                        <td>
                            {!!$data->specification!!}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
