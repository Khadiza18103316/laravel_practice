@extends('admin.master')
@section('content')

    <h3 class="mb-4">Products</h3>

    <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($buses as $key => $bus)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $bus->bus_name }}</td>
                    <td><img src="{{url('/uploads/' .$bus->image) }}" width="80"></td>
                    <td>{{ $bus->bus_no }}</td>
                    <td>{{ $bus->bus_type }}</td>

                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.bus.details', $bus->id) }}"><i
                                class="fas fa-eye"></i></a>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.bus.edit', $bus->id) }}"><i
                                class="fas fa-edit"></i></a>
                        <a class="btn btn-danger btn-sm" href="{{ route('admin.bus.delete', $bus->id) }}"><i
                                class="fas fa-trash-alt"></i></a>
                    </td>

                </tr>
            @endforeach --}}
        </tbody>
    </table>
@endsection