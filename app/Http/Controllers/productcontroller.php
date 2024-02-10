<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function showProduct(){
        $products = DB::table('products')->get();
        return view('products',['data' => $products]);
    }
    
    public function singleProduct(string $id){
        $products = DB::table('products')->where('id',$id)->get();
        return view('view',['data' => $products]);
    }

    public function cartProduct(){
        $products = DB::table('products')->get();
        return view('cart',['data' => $products]);
    }
    public function dashboardProduct(){
        $products = DB::table('products')->get();
        return view('dashboard',['data' => $products]);
    }

    // public function catagoryProduct(){
    //     $products = DB::table('products')->select('catagory')->get();
    //     return view('layout',['data' => $products]);
    // }

    // public function addProduct(Request $request){
    //     $products = DB::table('products')->create(
    //         $name = $request->name;
    //         $price = $request->price;
    //     );
    //     return redirect('dashboard');
    // }

    public function addProduct(Request  $req){
        $imageName = time().".".$req->image->extension();
        $req->image->move(public_path('images'), $imageName);
        $products = DB::table('products')->insert(
            [
                'title'=> $req->title,
                'description'=> $req->description,
                'price'=> $req->price,
                'stock'=> $req->stock,
                'catagory'=> $req->catagory,
                'image'=> $imageName,
            ]
            );
            if($products){
                return redirect('dashboard');
            }else{
                echo('there is some error while adding product');
            }
    } 

    public function deleteProduct(string $id){
        $product = DB::table('products')->where('id', $id)->delete();
        return redirect('dashboard');
    }

    public function update(string $id){
        $products = DB::table('products')->where('id',$id)->get();
        return view('update', ['data' => $products]);
    }

    public function updateProduct(Request $req, $id){
        $imageName = time().".".$req->image->extension();
        $req->image->move(public_path('/images'), $imageName);
        $product = DB::table('products')
                            ->where('id', $id)
                            ->update([
                                'title'=> $req->title,
                                'description'=> $req->description,
                                'price'=> $req->price,
                                'stock'=> $req->stock,
                                'catagory'=> $req->catagory,
                                'image'=> $imageName,
                            ]);

                            if($product){
                                return redirect()->route('dashboard');
                            }else{
                                echo "there is some problem in updating the user data";
                            }
                        }
}