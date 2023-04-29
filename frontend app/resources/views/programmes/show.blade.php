@extends('layouts.main')

@section('content')
<div class='container'>
<a href='/programmes' class='btn btn-outline-primary btn-sm'>Go Back</a>
    <h1 class='text-center'>{{$programme->name}}</h1>
    <span class="w-75 text-light bg-dark">{{$programme->category}}</span>
     <h4 class='text-dark'>Course description</h4>
     <hr>
     <h7 class='text-body'>{{$programme->description}}</h7>
     @if(!Auth::guest())
         <a href='/programmes/{{$programme->id}}/edit' class='btn btn-primary'>Edit</a>
         {{Form::open(['action'=>['ProgrammeController@destroy', $programme->id], 'method' => 'POST', 'class' => 'float-right'])}}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
         {{Form::close()}}
      @endif()

</div>
@endsection
