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
<form action="{{ route('teachers.update',$teacher->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Teacher name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$teacher->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Subject</label>
        <input type="text" class="form-control"   placeholder="Enter subjects" name="subjects"  value="{{$teacher->subjects}}">
      </div>
      <div class="form-group">
        <select multiple class="form-control " name="rooms_id[]" >
           @foreach ($teacher->rooms as $droom)
               
          

            <option value="{{$droom->id}}" selected>{{$droom->name}}</option>
            @endforeach
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
  