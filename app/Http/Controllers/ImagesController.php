<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ImagesController extends Controller
{
    //
    public function save(){
        $attributes = request()->validate([
            'pic'=>['file','required']
        ]);

        if(request('pic'))
            Images::create([
                'user_id'=>auth()->id(),
                'image_src'=>$attributes['pic']->store('assest')
            ]);

        return redirect()->route('home');
    }

    public function delete(Images $image){
        Storage::delete($image->image_src);
        Images::where('id',$image->id)->delete();
        return redirect()->route('home');
    }
}
