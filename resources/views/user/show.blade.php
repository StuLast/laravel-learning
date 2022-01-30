@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">User Profile</div>

                    <div class="card-body">
                        <div>
                            <h3> {{ $user->name }} </h3>
                            <p><i> ~ &quot; {{ $user->motto }} &quot;</i></p>
                            <hr>
                        </div>
                        <div>

                            <h5>About me:</h5>
                            <p>{{ $user->about_me }}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <a href="{{ URL::previous() }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-step-backward pr-2"></i>Back to hobbies
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
