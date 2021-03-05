<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    //

    public function veri(Request $request)
    {
        $user = $request->user()->id;
        User::where('id', $user)->update(['email_verified_at' => now()]);
        return redirect()->route('home');
    }

}
