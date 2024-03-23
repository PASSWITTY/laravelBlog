<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.AdminDash', compact('blogs'));
    }
    public function savePage()
    {
        return view('admin.add');
    }

    public function save(Request $request)
    {

        $request->validate([
            'title' => 'required|max:32',
            'content' => 'required',
            'author' => 'required|string|required|max:255'
        ]);
        $data = new Blog();

        $data->title = $request->input('title');
        $data->content = $request->input('content');
        $data->author = $request->input('author');
        $data->save();
        return redirect()->back()->with('success', 'Comment stored successfully!');
    }
    public function delete($id)
    {
        $item = Blog::find($id);
        $item->delete();
        return back()->with('success', 'deleted successfully!');
    }
    public function updatePage(Request $request)
    {
        $request->validate([
            'title' => 'required|max:32',
            'content' => 'required',
            'author' => 'required|string|required|max:255'
        ]);
        $data = Blog::find($request->id);
        $data->title = $request->input('title');
        $data->content = $request->input('content');
        $data->author = $request->input('author');
        $data->save();
        return back()->with('success','item record has been updated sucessfully');
    }
    public function editBlog($id){
       $blogItem = Blog::find($id);
       return view('admin.update', compact('blogItem'));
    }

    public function search($id)
    {
        // 
    }
    public function testimonials(){
        $testimonials = Feedback::all();
        return view('admin.testimonials', compact('testimonials'));
    }
}
