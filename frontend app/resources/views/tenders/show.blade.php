@extends('layouts.main')

@section('content')
<h3 class='text-center'>Curricula Activities</h3>
<div class='container'>
    <div class='row'>
        <div class='col-sm-8'>
            <h4>{{$tender->name}}</h4>
            <p>{{$tender->description}}</p>
        </div>
        <div class='col-sm-4'>
            <div class='card bg-dark text-light'>
                <h1 class='card-header'>
                    Important dates
                </h1>
                </div>
                <div class='card-body bg-light'>
                    <ul class='list-group unstyled-list'>
                        <li class='list-group-item'><p><span style='font-weight:bold;'>Released date:</span>{{$tender->created_at}}</p>
                        <li class='list-group-item'><p><span style='font-weight:bold;'>Updated date:</span>{{$tender->updated_at}}</p>
                        <li class='list-group-item'><p><span class='text-danger' style='font-weight:bold;'>deadline:</span></p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
