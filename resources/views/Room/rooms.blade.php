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
        <a href="{{route('rooms.create')}}"><button type="button" class="btn btn-primary" >Create</button></a>

    </div>
</div>
<div class="row">
              

<table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            
        
        <tr>
            <td class="text-center">{{++$i}}</td>
            <td>{{$row->name}}</td>
            <td class=" text-right">
                <form action="{{ route('rooms.destroy',$row->id) }}" method="POST">   

                <a href="{{route('rooms.edit',$row->id)}}">     <button type="button" class="btn btn-success">
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
