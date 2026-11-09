@extends('layouts.app', ['title' => 'User Accounts'])
@section('content')
<h1>User Accounts</h1>
<p><a href="{{ route('users.create') }}">Create User</a></p>
<table><thead><tr><th>Avatar</th><th>Username</th><th>Full Name</th><th>Action</th></tr></thead><tbody>
@forelse($users as $user)
<tr><td><img class="avatar" src="{{ $user->avatar ? asset('storage/'.$user->avatar) : asset('images/avatar-placeholder.svg') }}" alt="Avatar of {{ $user->full_name }}"></td><td>{{ $user->username }}</td><td>{{ $user->full_name }}</td><td><a href="{{ route('users.edit', $user) }}">Edit</a></td></tr>
@empty <tr><td colspan="4">No user accounts found.</td></tr> @endforelse
</tbody></table>
@endsection
