@extends('layouts.main')

@section('content')
<h1 class='text-center'>Curricula Activities</h1>
<div class='container'>
<ul class='unstyled-list list-group'>
@if(count($tenders)>0)
    @foreach($tenders as $tender)
        <li class="list-group-item">
                <h5><a href="/tenders/{{$tender->id}}">{{$tender->name}}</a></h5>
                <small class='text-dark'>created: {{$tender->created_at}}</small>
                <small class='text-danger float-right'>updated: {{$tender->updated_at}}</small>
        </li>
    @endforeach
@else
    <h1>No Programmes</h1>
@endif
</ul>
</div>
@endsection
