<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'user' => auth()->user()
        ]);
    }

    public function update(ProfileRequest $request)
    {
        /** @var User $user */
        $user = auth()->user();

        $data = $request->validated();

        if ($file = $request->photo) {
            $data['photo'] = $file->store('photo');
        }

        $user->fill($data)->save();

        return back()
            ->with('message', 'Profile atualizado com sucesso');
    }
}
