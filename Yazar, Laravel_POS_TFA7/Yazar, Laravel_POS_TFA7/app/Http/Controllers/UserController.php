<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class UserController extends Controller
{
    public function index(): View
    {
        return view('users.index', ['users' => User::latest()->get()]);
    }

    public function create(): View
    {
        return view('users.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'full_name' => ['required', 'string', 'max:255'],
        ]);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User account created successfully.');
    }

    public function edit(User $user): View
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:255', Rule::unique('users', 'username')->ignore($user->id)],
            'full_name' => ['required', 'string', 'max:255'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            $manager = new ImageManager(new Driver());
            $prepared = $manager->read($request->file('avatar')->getPathname())
                ->cover(300, 300)
                ->toJpeg(85);
            $avatarPath = 'avatars/'.uniqid('avatar_', true).'.jpg';
            Storage::disk('public')->put($avatarPath, (string) $prepared);
        }

        if ($avatarPath !== null) {
            $validated['avatar'] = $avatarPath;
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'User account updated successfully.');
    }
}
