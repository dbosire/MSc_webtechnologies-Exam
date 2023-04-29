@extends('layouts.main')

@section('content')
<h1 class='text-center'>Programmes</h1>
<div class='container'>
@if(count($programmes)>0)
    @foreach($programmes as $programme)
        <hr>
        <div class="well">
                <h6 class=''><a href="/programmes/{{$programme->id}}">{{$programme->name}}</a></h6>
                <span class="text-light bg-dark">{{$programme->category}}</span>

        </div>
        <hr>
    @endforeach
@else
    <h1>No Programmes</h1>
@endif
</div>
@endsection
