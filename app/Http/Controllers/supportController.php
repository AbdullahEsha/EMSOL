<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Support;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class supportController extends Controller
{
    public function getSupportData()
    {
        try {
            $supportData = Support::orderBy('id', 'desc')->get();
            return view('admin.support')->with('supportData', $supportData);
        } catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        }
    }

    public function store(Request $req)
    {
        $supportData = new Support();
        try {
            $image = $req->file('image')->getClientOriginalName();
            $supportData->email = $req->email;
            $supportData->details = $req->details;
            $supportData->image = 'img/uploads/' . $image;

            $product->save();
            $req->file('image')->move('img/uploads', $image);

            $req->session()->flash('msg', 'Blog was successfully added!!');
            return redirect('/admin/support');
        } catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        }
    }
}
