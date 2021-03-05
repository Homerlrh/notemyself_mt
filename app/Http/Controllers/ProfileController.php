<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class ProfileController extends Controller
{
    //

    public function show()
    {
        return view("profile", ['user' => auth()->user()]);
    }

    public function update()
    {
        $attributes = request()->validate([
            'name' => ['string', 'required', 'max:255'],
            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore(auth()->user())
            ],
            'password' => ['string', 'required', 'min:6', 'max:255', 'confirmed']
        ]);

//        $attributes['password'] = bcrypt($attributes['password']);

        auth()->user()->update($attributes);

        return redirect(route('home'));
    }
}
