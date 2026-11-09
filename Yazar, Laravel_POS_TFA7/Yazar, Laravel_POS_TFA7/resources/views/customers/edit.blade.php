@extends('layouts.app', ['title' => 'Edit Customer'])
@section('content')
<h1>Edit Customer</h1>
@include('customers.form', ['action' => route('customers.update', $customer), 'method' => 'PUT', 'button' => 'Update Customer'])
@endsection
