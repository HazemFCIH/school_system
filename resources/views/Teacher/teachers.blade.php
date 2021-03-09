@extends('layouts.dashboard')

@section('Navi')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <div class="col-md-4">
        <p class="h2">create Teachers</p>
        
    </div>
    <div class="col-md-6">
        <a href="{{route('teachers.create')}}"><button type="button" class="btn btn-primary" >Create</button></a>

    </div>
</div>
<div class="row">
              

<table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>subject</th>
            <th>Room</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            
        
        <tr>
            <td class="text-center">{{++$i}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->subjects}}</td>
            <td><ul> @foreach ($row->rooms as $room)
                
            
            <li>{{$room->name}}</li>
            @endforeach </ul></td>
            <td class=" text-right">
                <form action="{{ route('teachers.destroy',$row->id) }}" method="POST">   

                <a href="{{route('teachers.edit',$row->id)}}">     <button type="button" class="btn btn-success">
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
