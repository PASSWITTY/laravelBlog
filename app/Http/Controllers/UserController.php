<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Feedback;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $trendings = Blog::latest()->take(15)->get();
        return view('user.index', compact('trendings'));
    }
    public function carosel(){
        $caroselData = Blog::latest()->take(4)->get();
        return view('user.index', compact('caroselData'));
    }

    public function trending($id){
        $trendings = Blog::find($id);
        return view('user.blog', compact('trendings'));
    }

    public function feedBack(Request $request){
        $request->validate([
            'email' => 'required|max:32',
            'feedback' => 'required'
        ]);
        $feedback = new Feedback();

        $feedback->email = $request->input('email');
        $feedback->feedback = $request->input('feedback');
        $feedback->save();
        return redirect()->back()->with('success', 'Comment stored successfully!');
    }

}
