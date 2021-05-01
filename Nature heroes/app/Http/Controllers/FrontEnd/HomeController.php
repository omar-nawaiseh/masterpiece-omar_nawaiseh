<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function postCreate( Request $request )
    {
        validator::validate($request->all(), [
            'title' => ['required'],
            'image' => ['required', 'image']
        ]);

        $image = \Storage::disk('public')->put('posts', $request->file('image'));

        post::create([
            'title' => $request->input('title'),
            'image' => $image,
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
