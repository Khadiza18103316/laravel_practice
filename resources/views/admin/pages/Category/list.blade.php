@extends('admin.master')
@section('content')

    <h3 class="mb-4">Category list</h3>

    <a href="{{route('category.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $category)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $category->name }}</td>
                    <td><img src="{{url('/uploads/' .$category->image) }}" width="80"></td>
                    <td>{{ $category->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection