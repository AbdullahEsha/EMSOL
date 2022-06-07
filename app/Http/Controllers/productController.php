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
            return view('vendor.product')->with('productData', $productData);
        }
        catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        } 
    }
    
    public function store(Request $req){
        $uploadProductData = new Product;
        try {
            
            $uploadProductData->productDetail = $req->productDetail;
            $uploadProductData->img1 = $req->img1;
            $uploadProductData->img2 = $req->img2;
            $uploadProductData->img3 = $req->img3;
            $uploadProductData->img4 = $req->img4;
            $uploadProductData->price = $req->price;
            $uploadProductData->stock = $req->stock;

            $uploadProductData->save();

            $req->session()->flash('msg', 'Product was successfully added!!');
            return redirect('/vendor/product');
        }
        catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        } 
    }
}
