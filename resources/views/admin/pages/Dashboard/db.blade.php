@extends("admin.master")
@section('content')

@if(session()->has('message'))
<p class="alert alert-success">
    {{session()->get('message')}}
</p>
@endif

<h3>Dashboard</h3>
<br>

<div class="row">
<div class="col-sm-4">
    <div class="card text-dark bg-info mb-2" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title" >Product Details</h5>
        <p class="card-text">9+</p>
        <a href="#" class="btn btn-primary">Show More</a>
      </div>
    </div>
  </div> 
@endsection