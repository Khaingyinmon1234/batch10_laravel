
@extends('template')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1>Post Edit Form</h1>
        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

       <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">

        @csrf
        @METHOD('PUT')
        <div class="form-group">
         <label>Title:</label>
         <input type="text" class="form-control" value="{{$post->title}}" name="title" placeholder="Title">
         </div>
         <div class="form-group">
         <label>Content:</label>
         <textarea type="text" class="form-control"name="content">
         
         {{$post->body}}
        </textarea>
         </div>
         <div class="form-group">
         <label>Photo:</label><span class="text-danger">[ supported file types:jpeg,png ]</span>
         <input type="file" class="form-control" name="photo" >
         <img src="{{asset($post->image)}}" class="img-fluid w-25">
         <input type="hidden" name="oldphoto" value="{{$post->image}}">
         </div>
         <div class="form-group">
           <label>Categories</label>
           <select name="category" class="form-control">
             <option value="">Choose Category</option>
            {-- accept data and loop--}
             @foreach($categories as $row)
             <option value="{{$row->id}}" @if($row->id==$post->category_id){{'selected'}}@endif>{{$row->name}}</option>
             @endforeach
           </select>
         </div>
       
         <div class="form-group">
         <input type="submit" value="update" class="btn btn-primary" name="btnsubmit" >
         </div>
       </form>
        
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  @endsection