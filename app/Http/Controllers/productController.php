<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function getData(){
        try{
            $productData = Product::orderBy('id', 'desc')->get();
            //return $productData;
            return view('admin.product')->with('productData', $productData);
        }
        catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        } 
    }

    public function store(Request $req){
        $product = new Product;
        try {
            $product->c_name = $req->c_name;
            $product->phone = $req->phone;
            $product->email = $req->email;
            $product->b_date = $req->b_date;
            $product->n_person = $req->n_person;

            $product->save();

            $req->session()->flash('msg', 'Product was successfully added!!');
            return redirect('/admin/moderators');
        }
        catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        } 
    }
}
