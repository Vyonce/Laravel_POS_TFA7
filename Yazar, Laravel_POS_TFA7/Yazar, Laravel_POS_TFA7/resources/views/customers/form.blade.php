<form action="{{ $action }}" method="POST">
    @csrf @if($method !== 'POST') @method($method) @endif
    <label for="full_name">Full Name</label><input id="full_name" name="full_name" value="{{ old('full_name', $customer->full_name ?? '') }}" required>
    @error('full_name') <div class="error">{{ $message }}</div> @enderror
    <label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email', $customer->email ?? '') }}" required>
    @error('email') <div class="error">{{ $message }}</div> @enderror
    <button type="submit">{{ $button }}</button>
</form>
