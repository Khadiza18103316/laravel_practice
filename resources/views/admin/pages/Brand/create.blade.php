@extends("admin.master")
@section('content')
<h2>Brand Info</h2>
<br>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

{{-- <form action="#" method="POST" enctype="multipart/form-data">
  @csrf --}}
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Brand Name</label>
    <input required name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <button type="submit" class="btn btn-primary">Submit</button>
   <a href="{{route('brand.list')}}" type="button" class="btn btn-danger">Back</a>
{{-- </form> --}}

@endsection