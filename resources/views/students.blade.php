@extends('layouts.dashboard')

@section('Navi')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <div class="col-md-4">
        <p class="h2">create room</p>
        
    </div>
    <div class="col-md-6">
        <a href="{{route('students.create')}}"><button type="button" class="btn btn-primary" >Create</button></a>

    </div>
</div>
<div class="row">
              

<table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Room</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            
        
        <tr>
            <td class="text-center">{{++$i}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->rooms->name}}</td>

            <td class=" text-right">
                <form action="{{ route('students.destroy',$row->id) }}" method="POST">   

                <a href="{{route('students.edit',$row->id)}}">     <button type="button" class="btn btn-success">
                    edit
                </button> </a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button> </a>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>
      @endsection
