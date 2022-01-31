@extends('admin.master')
@section('content')

    <h3 class="mb-4">Brand list</h3>

    <a href="{{route('brand.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $key => $brand)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection