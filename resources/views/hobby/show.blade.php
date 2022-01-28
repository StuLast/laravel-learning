@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Hobby Detail</div>
                <div class="card-body">
                    <h3> {{$hobby->name}} </h3>
                    <p>{{$hobby->description}}</p>
                </div>
            </div>
            <div class="mt-2">
                <a href="/hobby" class="btn btn-primary btn-sm"><i class="fas fa-step-backward pr-2"></i>Back to all hobbies</a>
            </div>
        </div>
    </div>
</div>
@endsection
