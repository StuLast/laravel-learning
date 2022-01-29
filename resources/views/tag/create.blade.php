@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Tag</div>
                    <div class="card-body">
                        <form action="/tag" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'border-danger': ''}}" id="name" name="name" value="{{old('name')}}" onInput="updateButton(event)">
                                <small class="form-text text-danger">{!!$errors->first('name')!!}</small>
                            </div>
                            <div class="form-group">
                               Example:  <button id="demo_button" class="btn {{old('name') ? 'btn-'.old('name') : 'btn-light'}}" onClick="event.preventDefault()">{{old('name') ?? 'button'}}</button>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="style" id="style">
                                <label for="style-picker">Style: </label>
                                    <button class="btn btn-small btn-primary" onClick="onButtonClick(event)" name="primary">Blue</button>
                                    <button class="btn btn-small btn-secondary" onClick="onButtonClick(event)" name="secondary">Grey</button>
                                    <button class="btn btn-small btn-success" onClick="onButtonClick(event)" name="success">Green</button>
                                    <button class="btn btn-small btn-danger" onClick="onButtonClick(event)" name="danger">Red</button>
                                    <button class="btn btn-small btn-warning" onClick="onButtonClick(event)" name="warning">Yellow</button>
                                    <button class="btn btn-small btn-info" onClick="onButtonClick(event)" name="info">Teal</button>
                                    <button class="btn btn-small btn-light" onClick="onButtonClick(event)" name="light">Light Grey</button>
                                    <button class="btn btn-small btn-dark" onClick="onButtonClick(event)" name="dark">Charcoal</button>
                              </div>
                            <input class="btn btn-primary mt-4" type="submit" value="Save Tag">
                        </form>
                        <a class="btn btn-primary float-right" href="/hobby"><i class="fas fa-arrow-circle-up"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    const onButtonClick = (event) => {
        event.preventDefault();
        const selectedStyle = event.target.name;
        let style = document.getElementById('style');
        let demoButton = document.getElementById('demo_button');
        style.value = selectedStyle;
        demoButton.className =  `btn btn-${selectedStyle}`;
    }

    const updateButton = (event) => {
        event.preventDefault();
        let demoButton = document.getElementById('demo_button');
        let textContent = event.target.value;
        demoButton.textContent = textContent ? textContent : 'button';
    }
</script>
