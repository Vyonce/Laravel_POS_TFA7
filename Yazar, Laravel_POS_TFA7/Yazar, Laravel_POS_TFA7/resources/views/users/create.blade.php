@extends('layouts.app', ['title' => 'Create User'])
@section('content')
<h1>Create User</h1>
@include('users.form', ['action' => route('users.store'), 'method' => 'POST', 'button' => 'Save User'])
@endsection
