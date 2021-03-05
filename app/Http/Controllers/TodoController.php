<?php

namespace App\Http\Controllers;

use App\Models\todos;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:255'
        ]);

        todos::create([
           'user_id' =>auth()->id(),
            'item'=>$attributes['body']
        ]);

        return redirect()->route('home');
    }

    public function isDone(todos $todo){
        if($todo->isDone == 1){
            todos::where('id',$todo->id)->update(['isDone' =>false]);
            return redirect()->route('home');
        }
        todos::where('id',$todo->id)->update(['isDone' =>true]);
        return redirect()->route('home');
    }

    public function remove(todos $todo){

        todos::where('id',$todo->id)->delete();

        return redirect()->route('home');

    }

}
