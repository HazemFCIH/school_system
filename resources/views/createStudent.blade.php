@extends('layouts.dashboard')

@section('Navi')


<div class="row">
    
    <div class="col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label>Student name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <select class="form-control selectpicker" data-style="btn btn-link" name="rooms_id" id="rooms_id">
           
            <option>select values</option>
            @foreach ($rooms as $room)
                
            <option value="{{$room->id}}">{{$room->name}}</option>

            @endforeach

          </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

@endsection
  