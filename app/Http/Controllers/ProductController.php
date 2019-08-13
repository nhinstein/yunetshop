<?php

namespace App\Http\Controllers;
use View;
use App\Product;
use App\ProductImage;
use App\Category;
use App\Http\Requests\AddProductRequests;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $this->addProduct($request);
        // dd($product);
        $file = $request->file('file');
        for($i=0; $i<count($file);$i++){
            $count = $i+1;
            $image = $file[$i];
            $extension = $image->getClientOriginalExtension();
            $filename = "{$product->slug}-{$count}.".$extension;
            $path = 'img/img/'.$filename;
            $image->move('img/img/',$filename);
            $image = ProductImage::create(['product_id' => $product->id, 'src'=>$path]);
            if($count===1){
                $product->cover=$filename;
                $product->save();
            }
            $product->images()->save($image);
        }
        $products = Product::inRandomOrder()->take(12)->paginate(12);
        $success_message="Berhasil Menambah produk";
        return redirect()->route('import.show')->with([
           'products'=>$products,
           'success_message'=>$success_message,
       ]);
        
    }

    private function addProduct($request){
        
        $slug = 'YS-'.str_random(15);
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'weight' => $request->weight,
                'slug' => $slug,
                'stock'=> $request->stock,
                'category_id' => $request->category
             ]);
             $product->save();


             return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categories = Category::all();
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product/admin_single_product')->with([
            'product'=> $product,
            'categories'=> $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        $products = Product::inRandomOrder()->take(12)->paginate(12);
        $success_message="Berhasil Merubah Produk";
        
        return redirect()->route('import.show')->with([
            'products'=>$products,
            'success_message'=>$success_message,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return back()->with('success_message', 'Produk berhasil dihapus');
    }
}
