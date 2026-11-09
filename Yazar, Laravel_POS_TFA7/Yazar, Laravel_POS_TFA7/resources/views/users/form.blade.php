<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf @if($method !== 'POST') @method($method) @endif
    <label for="username">Username</label><input id="username" name="username" value="{{ old('username', $user->username ?? '') }}" required>
    @error('username') <div class="error">{{ $message }}</div> @enderror
    <label for="full_name">Full Name</label><input id="full_name" name="full_name" value="{{ old('full_name', $user->full_name ?? '') }}" required>
    @error('full_name') <div class="error">{{ $message }}</div> @enderror
    @if(isset($user))
        <label for="avatar">Profile Picture</label><input id="avatar" type="file" name="avatar" accept="image/jpeg,image/png,image/webp">
        <small>Optional. JPG, JPEG, PNG, or WEBP; maximum 2 MB.</small>
        @error('avatar') <div class="error">{{ $message }}</div> @enderror
    @endif
    <button type="submit">{{ $button }}</button>
</form>
