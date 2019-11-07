@extends('template')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1>Category Create Form</h1>
        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
      </div>
    @endif

       <form method="post" action="{{route('category.store')}}">

        @csrf
        <div class="form-group">
         <label>Name:</label>
         <input type="text" class="form-control" name="name" placeholder="Title">
         </div>
         
       
         <div class="form-group">
         <input type="submit" class="btn btn-primary" value="save" name="btnsubmit" >
         </div>
       </form>
        
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  @endsection