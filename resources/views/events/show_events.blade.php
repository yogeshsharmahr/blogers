@extends('layouts.front')
   
@section('content')
<div class="container">
<div class="row">
<div class="col-lg-12">
<table class="table table-bordered">
  <thead>
    <tr class="text-center">
      <td scope="col"><b>Id</b></td>

      <td scope="col"><b>Event date</b></td>
      <td scope="col"><b>Title</b></td>
      <td scope="col"><b>short description</b></td>
      <td scope="col"><b>Join</b></td>
    </tr>
  </thead>
  <tbody>
  	@foreach($event as $events)
    <tr class="text-center">
      <td scope="row ">{{$events->id}}</td>
       <td scope="row ">{{$events->event_date}}</td>
      <td>{{$events->event_title}}</td>
      <td>{{\Illuminate\Support\Str::limit($events->description,25)}}</td>
      <td><a class="btn btn-warning" href="{{ URL('/event/join/'.$events->slug )}}">Join</a></td>
    </tr>
    
    @endforeach
  </tbody>
</table>
</div>
</div>


@endsection