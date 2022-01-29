@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Tags</div>
                <div class="card-body">
                   <ul class="list-group">
                       @foreach($tags as $tag)
                        <li class="list-group-item">
                            <button class="btn btn-{{$tag->style}}">{{$tag->name}}</button>
                           <a title="Edit" class="btn btn-light btn-sm ml-2" href="/tag/{{ $tag->id }}/edit"><i class="fas fa-edit"></i> Edit</a>
                            <form style="dispay:inline;" class="float-right" action="/tag/{{$tag->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-small btn-outline-danger">
                            </form>
                        </li>
                       @endforeach
                   </ul>
                </div>
            </div>
            <div class="mt-2">
                <a href="/tag/create" class="btn btn-success btn-sm"><i class="fas fa-plus-circle pr-2"></i>Create New Tag</a>
            </div>
        </div>
    </div>
</div>
@endsection
