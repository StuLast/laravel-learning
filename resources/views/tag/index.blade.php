@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Tags</div>
                <div class="card-body">
                    @if($tags && count($tags) > 0)
                   <ul class="list-group">
                       @foreach($tags as $tag)
                        <li class="list-group-item">
                            <a title="Edit" class="btn btn-light btn-sm ml-2" href="/tag/{{ $tag->id }}/edit"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-{{$tag->style}}">{{$tag->name}}</button>
                            <form style="dispay:inline;" class="float-right" action="/tag/{{$tag->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-small btn-outline-danger">
                            </form>
                        </li>
                       @endforeach
                   </ul>
                   @else
                    <div> There are no tags yet.  Click on "Create New Tag" to add tags</div>
                   @endif
                </div>
            </div>
            <div class="mt-2">
                <a href="/tag/create" class="btn btn-success btn-sm"><i class="fas fa-plus-circle pr-2"></i>Create New Tag</a>
            </div>
        </div>
    </div>
</div>
@endsection
