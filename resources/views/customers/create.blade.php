@extends('layouts.app')
@section('title', 'Add New Customer')

@section('content')
    <div class="row">
        <div class="col-12">
            <h3>Create Customer</h3>
        </div>
    </div>

<form action="/customers" method="POST">
    @csrf
        @include('customers.form')

        <button class="btn btn-primary form-control" type="submit"> Add Customer </button>
        <hr class="form-control">
    </div>
</form>
   
@endsection