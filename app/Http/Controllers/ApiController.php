<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'title'=>'required|string',
            'body'=>'required',
        ]);

        // $blog = Blog::create([
        //     'name' => $request->name,
        //     'title' => $request->title,
        //     'body' => $request->body,
        // ]);
        

        $blogs = new Blog();
        $blogs->name = $request->input('name');
        $blogs->title = $request->input('title');
        $blogs->body = $request->input('body');

        $blogs->save();
        return response()->json(['status'=>200, 'message'=>'Post Created Successfully!']);
    }

    public function show()
    {
        $blogs = Blog::all();
        return response()->json($blogs);
    }
    
    public function showbyid($id)
    {
        $blogs = Blog::find($id);
        return response()->json($blogs);
    }

    public function updateById(Request $request, $id)
    {
        $blogs = Blog::find($id);
        $blogs->name = $request->input('name');
        $blogs->title = $request->input('title');
        $blogs->body = $request->input('body');

        $blogs->save();
        return response()->json(['status'=>200, 'message'=>'Post Updated Successfully!']);
    }

    public function deleteById(Request $request, $id)
    {
        $blogs = Blog::find($id);
        $blogs->delete();
        
        return response()->json(['Status'=>200, 'message'=>'Post Deleted Successfully!']);

    }
}
