@extends("admin.master")
@section('content')
<h2>Product Info</h2>
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

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input required name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input required name='price' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input required name='description' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Add Category</label>
    <select class="form-control" required name="category">
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    </div>

    <div class="mb-2">
      <label for="exampleInputEmail1" class="form-label">Add Brand</label>
      <select class="form-control" required name="brand">
          @foreach ($brands as $brand)
          <option value="{{$brand->id}}">{{$brand->name}}</option>
          @endforeach
      </select>
      </div>

        <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Image</label>
        <input required name='image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
   <a href="{{route('product.list')}}" type="button" class="btn btn-danger">Back</a>
</form>

@endsection