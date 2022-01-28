@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">All The Hobbies</div>
                <div class="card-body">
                   <ul class="list-group">
                       @foreach($hobbies as $hobby)
                        <li class="list-group-item">
                           <h3> <a title="Show Details" href="/hobby/{{ $hobby->id }}">{{ $hobby->name }}</a> </h3>
                        </li>
                       @endforeach
                   </ul>
                </div>
            </div>
            <div class="mt-2">
                <a href="/hobby/create" class="btn btn-success btn-sm"><i class="fas fa-plus-circle pr-2"></i>Create New Hobby</a>
            </div>
        </div>
    </div>
</div>
@endsection
