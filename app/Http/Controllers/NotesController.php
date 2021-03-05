<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    //

    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:255'
        ]);

        $isExist = Notes::where('user_id', auth()->id())->exists();
        if (!$isExist) {
            Notes::create([
                'user_id' => auth()->id(),
                'body' => $attributes['body']
            ]);
        } else {
            Notes::where('user_id', auth()->id())->update(['body' => $attributes['body']]);
        }


        return redirect()->route('home');
    }
}
