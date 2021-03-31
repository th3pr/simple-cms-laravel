<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // public function myblogs()
    // {
    //     $blogs = [
    //         "b1" => ["title" => "Sample Title 1", "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
    //         industry's standard dummy text ever since the 1500s", "auther"=> "admin"],
    //         "b2" => ["title" => "Sample Title 2", "body" => "when an unknown printer took a galley of type
    //         and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
    //         leap into electronic typesetting", "auther"=> "mohamed"],
    //         "b3" => ["title" => "Sample Title 3", "body" => "remaining essentially unchanged. It was popularised in the 1960s
    //         with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
    //         publishing software like Aldus PageMaker including versions of Lorem Ipsum", "auther"=> "ahmed"]
    //     ];
    //     return view('blog', ["data" => $blogs]);
    // }
    // public function singleBlog ($single){
    //     $blogs = [
    //         "b1" => ["title" => "Sample Title 1", "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
    //         industry's standard dummy text ever since the 1500s", "auther"=> "admin"],
    //         "b2" => ["title" => "Sample Title 2", "body" => "when an unknown printer took a galley of type
    //         and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
    //         leap into electronic typesetting", "auther"=> "mohamed"],
    //         "b3" => ["title" => "Sample Title 3", "body" => "remaining essentially unchanged. It was popularised in the 1960s
    //         with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
    //         publishing software like Aldus PageMaker including versions of Lorem Ipsum", "auther"=> "ahmed"]
    //     ];
    //     if(array_key_exists($single,$blogs)){
    //         return view('single', ['data'=> $blogs[$single]]);
    //     }

    // }


    // Show all Blog Posts
    public function index()
    {
        $blog = new Blog;
        $blog = $blog->all();
        return view('blog', ['data' => $blog]);
    }

    // Create new Blog Post
    public function create()
    {
        return view('create');
    }

    // Publish new Blog Post
    public function save()
    {
        // dump($_POST);
        $blog = new Blog;
        $blog->title = request('title');
        $blog->body = request('body');
        $blog->slug = request('slug');
        $blog->auther = request('auther');
        $blog->save();
        if (isset($_POST)){
            // This cause XSS :)
            // How can i Fix it
            return redirect()->route('blog.create', ['data'=>'Post Published Successfully']);
        }
    }

    // Show Single Post
    public function view($id)
    {
        $blog = new Blog;
        $blogFind = $blog->findorfail($id);
        return view('view', ['data'=>$blogFind]);
    }
    // Edit Single Post
    public function edit($id)
    {
        $blog = new Blog;
        $blogFind = $blog->findorfail($id);
        return view('edit', ['data'=>$blogFind]);
    }
    // Update Post
    public function update($id)
    {
        $blog = new Blog;
        $blog = $blog->findorfail($id);
        $blog->title = request('title');
        $blog->body = request('body');
        $blog->slug = request('slug');
        $blog->auther = request('auther');
        $blog->save();
        // return redirect()->route('blog.view', ['data'=>$blog]);
        // New way :)
        return redirect()->route('blog.view',$blog->id);
    }
    // Delete Post
    public function delete($id)
    {
        $blog = new Blog;
        $blog = $blog->findorfail($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
