<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Blog;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    public function getData(){
        try{
            $blogData = Blog::orderBy('id', 'desc')->get();
            //return $blogData;
            return view('admin.blog')->with('blogData', $blogData);
        }
        catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        } 
    }

    public function store(Request $req){
        $blogUploadData = new Blog;
        try {
            $blogUploadData->blogDetail = $req->blogDetail;
           
            $product->save();

            $req->session()->flash('msg', 'Blog was successfully added!!');
            return redirect('/admin/blog');
        }
        catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        } 
    }
}
