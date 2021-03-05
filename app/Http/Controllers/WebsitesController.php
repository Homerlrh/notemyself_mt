<?php

namespace App\Http\Controllers;

use App\Models\websites;
use Illuminate\Http\Request;

class WebsitesController extends Controller
{
    //
    public function store()
    {
        $arrayOFLinks = request()['links'];
        $nonNull = array_filter($arrayOFLinks, function ($value) {
            return !is_null($value) && $value !== '';
        });

        foreach ($nonNull as $link) {
            websites::create([
                'user_id' => auth()->id(),
                'url' => $link
            ]);
        }

        return redirect()->route('home');
    }
}
