@extends('layouts.app', ['title' => 'Edit User'])
@section('content')
<h1>Edit User</h1>
@include('users.form', ['action' => route('users.update', $user), 'method' => 'PUT', 'button' => 'Update User'])
@endsection
