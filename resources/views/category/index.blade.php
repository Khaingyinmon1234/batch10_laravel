
@extends('template')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1>Category Form</h1>
        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
    <table class="table table-bordered" cellpadding="10" cellspacing="0">
      <thead>
        <tr>
          <th>Name</th>
          <th colspan="2">Action</th>
        </tr>
        
      </thead>
      <tbody>
        @foreach($posts as $row)
        <tr>
          <td>{{$row->name}}</td>
          <td><a href="{{route('category.edit',$row->id)}}" class="btn btn-primary">Edit</a></td>
        <td>
          <form method="post" action="{{route('category.destroy',$row->id)}}">
          @csrf
          @method('DELETE')
          <input type="submit" name="delete" value="Delete" class="btn btn-danger">
          </form>
        </td>
        </tr>

        @endforeach
        
      </tbody>
      <tfoot>
        
      </tfoot>
    </table>

        </div>
      </div>

    </div>
    @endsection