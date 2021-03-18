@extends('layouts.header')
@section('sidebar')
@include('layouts.sidebar')
@endsection
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
<form action="{{ route('rooms.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label>Room name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

@endsection
  