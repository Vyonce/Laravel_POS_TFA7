@extends('layouts.app', ['title' => 'Create Customer'])
@section('content')
<h1>Create Customer</h1>
@include('customers.form', ['action' => route('customers.store'), 'method' => 'POST', 'button' => 'Save Customer'])
@endsection
