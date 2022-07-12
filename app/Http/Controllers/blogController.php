<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Blog;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    public function getData()
    {
        try {
            $blogData = Blog::orderBy('id', 'desc')->get();
            //return $blogData;
            return view('admin.blog')->with('blogData', $blogData);
        } catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        }
    }

    public function store(Request $req)
    {
        $blogUploadData = new Blog();
        try {
            $image = $req->file('image')->getClientOriginalName();
            $blogUploadData->image = 'img/uploads/'.$image;
            $blogUploadData->blogDetail = $req->blogDetail;

            $product->save();
            $req->file('image')->move('img/uploads', $image);

            $req->session()->flash('msg', 'Blog was successfully added!!');
            return redirect('/admin/blog');
        } catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        }
    }

    public function updateBlog(Request $req)
    {
        $update = Blog::find($req->id);
        $rename = $req->file('image')->getClientOriginalName();
        $update->image = 'img/uploads/'.$rename;
        $update->blogDetail = $req->blogDetail;

        $update->update();
        $req->file('image')->move('img/uploads', $rename);
        return redirect('/admin/blog');
    }
    public function uploadBlog(Request $req)
    {
        $blog = new Blog();

        $image = $req->file('image')->getClientOriginalName();

        $blog->image = 'img/uploads/' . $image;
        $blog->blogDetail = $req->blogDetail;

        if ($blog->save()) {
            $req->file('image')->move('img/uploads', $image);
            return redirect('/admin/blog');
        } else {
            $req
                ->session()
                ->flash(
                    'error',
                    'An error occurred. file could not be registered.'
                );
            return redirect('/admin/blogUpload');
        }
    }
    public function deleteBlog(Request $req)
    {
        $delete = Blog::find($req->id);
        $delete->delete();
        return redirect('/admin/blog');
    }
    public function getDataById($id)
    {
        $blogData = Blog::whereIn('id', [$id])->first();
        return view('admin.editBlog')->with('blogData', $blogData);
    }
    public function getDeleteDataById($id)
    {
        $blogData = Blog::whereIn('id', [$id])->first();
        return view('admin.deleteBlog')->with('blogData', $blogData);
    }
}
