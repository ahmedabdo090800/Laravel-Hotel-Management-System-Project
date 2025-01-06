@extends('admin.master')
@section('title','View Rooms')
@section('content')



<div class="ml-5 mr-5">
    @if (session('delete-message'))
    <div class="alert alert-danger">
        {{ session('delete-message') }}
    </div>
    @endif

    <table class=" table table-striped">
        <thead>
          <tr>
            <th scope="col">Room Title</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">Room Type</th>
            <th scope="col">Wifi</th>
            <th scope="col">Image</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
            @if (count($data)>0 )
            @foreach ($data as $data )
 
            <tr>
              <td>{{$data->room_title}}</td>
              <td>{!!Str::limit($data->description,150)!!}</td>
              <td>{{$data->price}}</td>
              <td>{{$data->room_type}}</td>
              <td>{{$data->wifi}}</td>
              <td><img width="60px" src="room/{{ $data->image}}"> </td>
              <td><a class="btn btn-info" href="{{route('room.edit',$data->id)}}">Update</a></td>
              <td><a onclick="return confirm('Are you sure to Delete this Room') " class="btn btn-danger" href="{{route('room.delete',$data->id)}}">Delete</a></td>
            </tr>
            @endforeach
            @else
            <div class="alert alert-warning">
                There are no rooms .
            </div>
               
            @endif
        
        </tbody>
      </table>


@endsection