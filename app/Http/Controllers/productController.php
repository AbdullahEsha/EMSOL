<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function getProduct()
    {
        try {
            $productData = Product::orderBy('id', 'desc')->get();
            //return $productData;
            return view('vendor.product')->with('productData', $productData);
        } catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        }
    }

    public function storeProduct(Request $req)
    {
        $uploadProductData = new Product();
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
        } catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        }
    }

    function addProduct(Request $req)
    {
        if (isset($_POST['submit'])) {
            $add = new Product();

            $img1 = $req->file('img1')->getClientOriginalName();
            $img2 = $req->file('img2')->getClientOriginalName();
            $img3 = $req->file('img3')->getClientOriginalName();

            $add->productDetail = $req->productDetail;
            $add->img1 = 'img/uploads/' . $img1;
            $add->img2 = 'img/uploads/' . $img2;
            $add->img3 = 'img/uploads/' . $img3;
            $add->price = $req->price;
            $add->stock = $req->stock;

            if ($add->save()) {
                $req->file('img1')->move('img/uploads', $img1);
                $req->file('img2')->move('img/uploads', $img2);
                $req->file('img3')->move('img/uploads', $img3);
                return redirect('/product');
            } else {
                $req
                    ->session()
                    ->flash(
                        'error',
                        'An error occurred. file could not be registered.'
                    );
                return redirect('/vendor');
            }
        }
    }

    public function updateProduct(Request $req)
    {
        $update = Product::find($req->id);
        $file1 = $req->file('img1')->getClientOriginalName();
        $file2 = $req->file('img2')->getClientOriginalName();
        $file3 = $req->file('img3')->getClientOriginalName();

        $update->productDetail = $req->productDetail;
        $update->img1 = 'img/uploads/' . $file1;
        $update->img2 = 'img/uploads/' . $file2;
        $update->img3 = 'img/uploads/' . $file3;
        $update->price = $req->price;
        $update->stock = $req->stock;

        $update->update();
        $req->file('img1')->move('img/uploads', $file1);
        $req->file('img2')->move('img/uploads', $file2);
        $req->file('img3')->move('img/uploads', $file3);

        return redirect('/product');
    }

    function uploadProduct(Request $req)
    {
        if (isset($_POST['submit'])) {
            $product = new Product();

            // $validatedData = $request->validate(['img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);

            $image1 = $req->file('img1')->getClientOriginalName();
            $image2 = $req->file('img2')->getClientOriginalName();
            $image3 = $req->file('img3')->getClientOriginalName();

            $product->productDetail = $req->productDetail;
            $product->img1 = 'img/uploads/' . $image1;
            $product->img2 = 'img/uploads/' . $image2;
            $product->img3 = 'img/uploads/' . $image3;
            $product->price = $req->price;
            $product->stock = $req->stock;

            if ($product->save()) {
                $req->file('img1')->move('img/uploads', $image1);
                $req->file('img2')->move('img/uploads', $image2);
                $req->file('img3')->move('img/uploads', $image3);
                return redirect('/product');
            } else {
                $req
                    ->session()
                    ->flash(
                        'error',
                        'An error occurred. file could not be registered.'
                    );
                return redirect('/vendor');
            }
        }
    }
    public function deleteProduct(Request $req)
    {
        $delete = Product::find($req->id);
        $delete->delete();
        return redirect('/product');
    }
    public function getDataById(Request $req)
    {
        $id = $req->id;
        $productData = Product::whereIn('id', [$id])->first();
        return view('vendor.product')->with('product', $productData);
    }
}
