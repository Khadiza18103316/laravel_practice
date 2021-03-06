@extends('admin.master')
@section('content')

    <h3 class="mb-4">Product list</h3>

    @if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif 

@if(session()->has('success'))
    <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

    <a href="{{route('product.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Brand</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $product->name }}</td>
                    <td><img src="{{url('/uploads/' .$product->image) }}" width="80"></td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category->name }}</td>                    
                    <td>{{ $product->brand->name }}</td>
                    <td><a href="{{ route('product.edit', $product->id) }}"><button
                        class="btn btn-primary">Edit</button></a></td>
            <td><button class="btn btn-danger" data-toggle="modal"
                    data-target="#exampleModal{{ $product->id }}">Delete</button>
            </td>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="{{ route('product.delete', $product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="exampleModalLabel{{ $product->id }}">Delete
                                    confiramation
                                </h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-fidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection