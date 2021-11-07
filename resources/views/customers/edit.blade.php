@extends('layouts.app')
@section('title', 'Edit Details for '. $customer->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h3>Edit details for {{ $customer->name }}</h3>
        </div>
    </div>

<form action="/customers/{{ $customer->id }}" method="POST">
    @method('PATCH')
    @csrf
        @include('customers.form')

        <button class="btn btn-primary form-control" type="submit"> Save Customer </button>
        <hr class="form-control">
    </div>
            {{ $errors->first('email')}}
            {{ $errors->first('name') }} 
</form>
   
@endsection