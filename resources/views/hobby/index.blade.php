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
                                    <a title="Show Details" href="/hobby/{{ $hobby->id }}">{{ $hobby->name }}</a>
                                    @auth
                                        <a title="Edit" class="btn btn-light btn-sm ml-2" href="/hobby/{{ $hobby->id }}/edit"><i class="fas fa-edit"></i> Edit</a>
                                        <form style="dispay:inline;" class="float-right" action="/hobby/{{$hobby->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-small btn-outline-danger">
                                        </form>
                                    @endauth
                                </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="mt-3">
                {{ $hobbies->links()  }}
            </div>
            @auth
                <div class="mt-2">
                    <a href="/hobby/create" class="btn btn-success btn-sm"><i class="fas fa-plus-circle pr-2"></i>Create New Hobby</a>
                </div>
            @endauth
        </div>
    </div>
</div>
@endsection
