@extends('layouts.app')
@section('content')
<h3>Contact us</h3>
<p>123-123-1234</p>

<form action="/contact" method="POST">
@csrf
    <div class="form-group col-6 offset-3">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value={{ old('name') }}> 
        <div>{{ $errors->first('name') }}</div>
    </div>

    <div class="form-group col-6 offset-3">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value={{ old('email') }}>
        <div>{{ $errors->first('email')}}</div>
    </div>

    <div class="form-group col-6 offset-3">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="20" rows="7" class="form-control" value="{{ old('message') }}"></textarea>
        <div>{{ $errors->first('message')}}</div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </div>
</form>

@endsection