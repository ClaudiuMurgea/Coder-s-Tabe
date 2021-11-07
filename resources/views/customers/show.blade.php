@extends('layouts.app')
@section('title', 'Details for '. $customer->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h3>Details for {{ $customer->name }}</h3>
            <p><a href="/customers/{{ $customer->id }}/edit">Edit customer</a></p>
                <form action="/customers/{{ $customer->id }}" method="POST">
                @csrf 
                @method('delete')
                    <button type="submit" class="btn btn-danger">Delete customer</button>
                </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name</strong> {{ $customer->name }}</p>
            <p><strong>Email</strong> {{ $customer->name }}</p>
            <p><strong>Company</strong> {{ $customer->name }}</p>
        </div>
    </div>
   
@endsection