<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use App\ProductImages;
use File;
use App\Categories;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products = Products::orderBy("position","ASC")->get();
        return view("admin.products",compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
$categories = Categories::get(); 
        return view("admin.addProduct",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,bmp,png',
            'images' => '',
            'categoryId'=>'required',
            'salePrice'=>'',
            'sku'=>'required',
            'url'=>'url',
            'saleStatus'=>'',
            'active'=>'',
            'description' => 'required',
            'price' => 'required'
        ]);
        $productId = uniqid();
        $data +=array('productId' =>$productId);
        $thumbfilefile = $data["thumbnail"];
        $thumbfile = "t".$productId.$thumbfilefile->getClientOriginalName();
        $data["thumbnail"] = $thumbfile;
        $thumbfilefile->move("productImages", $thumbfile);
        if (!empty($data["images"]) && count($data["images"])) {
            foreach ($data["images"] as $value) {
                $filevalue = "i".$productId.$value->getClientOriginalName();
                $value->move("productImages", $filevalue);
                ProductImages::create([
                "productId"=>$productId,
                "name"=>$filevalue
                ]);
            }
            unset($data["images"]);
        }
        if(!isset($data["active"])){
           $data["active"] = 0;
        }
        if(!isset($data["saleStatus"])){
           $data["saleStatus"] = 0;
        }
        if(Products::create($data)){
            $id = Products::orderBy("id","DESC")->limit(1)->pluck("id")->first();
            Products::where("productId",$data["productId"])->update(["position"=>$id]);
        Session()->flash('message', "Product Added Sucessfully");
        return redirect("/products");
        }else{
         Session()->flash('message', "Product Not Sucessfully Added");
        return back();           
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        $product = Products::where("productId",request("productId"))->get()->first();
        $selectedCategory = Categories::where("categorieId",$product->categoryId)->get()->first();
        $categories = Categories::get();
        return view("admin.editProduct",compact('product','categories','selectedCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $data = request()->validate([
            'productId'=>'required',
            'name' => 'required|string',
            'thumbnail' => '',
            'images' => '',
            'categoryId'=>'',
            'salePrice'=>'',
            'sku'=>'required',
            'url'=>'url',
            'saleStatus'=>'',
            'active'=>'',
            'description' => 'required',
            'price' => 'required'
        ]);
        $previousData = Products::where("productId",$data['productId'])->get()->first();
         $productId = $data["productId"];
        if (isset($data["thumbnail"]) && $data["thumbnail"] != null) {
        File::delete("productImages/".$previousData->thumbnail);
        $thumbfilefile = $data["thumbnail"];
        $thumbfile = "t".$productId.$thumbfilefile->getClientOriginalName();
        $data["thumbnail"] = $thumbfile;
        $thumbfilefile->move("productImages", $thumbfile); 
        }
        if (isset($data["images"]) && count($data["images"])) {
            $previousDataImages = ProductImages::where("productId",$data['productId']);
            foreach($previousDataImages->get() as $previousDataImage){
              File::delete("productImages/".$previousDataImage->name);
            }
            $previousDataImages->delete();
            foreach ($data["images"] as $value) {
                $filevalue = "i".$productId.$value->getClientOriginalName();
                $value->move("productImages", $filevalue);
                ProductImages::create([
                "productId"=>$productId,
                "name"=>$filevalue
                ]);
            }
            unset($data["images"]);
        }
        if(!isset($data["active"])){
           $data["active"] = 0;
        }
        if(!isset($data["saleStatus"])){
           $data["saleStatus"] = 0;
        }
        if(Products::where("productId",$productId)->update($data)){
        Session()->flash('message', "Product Added Sucessfully");
        return redirect("/products");
        }else{
         Session()->flash('error', "Product Not Sucessfully Updated");
        return back();           
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(){
        $productData = Products::where("productId",request('productId'));
        $productDataImages = ProductImages::where("productId",request('productId'));
        File::delete("productImages/".$productData->get()->first()->thumbnail);
        if(count($productDataImages->get())){
        foreach ($productDataImages->get() as $productDataImage) {
            File::delete("productImages/".$productDataImage->name);
        }
        $productDataImages->delete();
    }
    if($productData->delete()){
    Session()->flash('message', "Product Sucessfully Updated");
    }else{
      Session()->flash('error', "Product Not Sucessfully Updated");  
    }
    return redirect("/products");
    }

    public function updatePosition(){
     if (count(request("positionData"))){
        foreach (request("positionData") as $key => $value) {
            $key = $key+1;
            Products::where("productId",$value)->update(["position"=>$key]);
     }
        $message["message"] = "Positions Sucessfully Updated."; 
        return response()->json($message, 200);
    }
    }

    public function searchProduct(){
        if(request("searchFor") == null){
         return "<center><h2>Please Enter Something To Search...</h2></center>";
        }
         $products = Products::where(request("searchWith"),"LIKE","%".request('searchFor').'%')->get();
         return view("admin.partials.productSearchTable",compact("products"));
    }
    public function cominSoon(){
        return view("user.comingSoon");
    }    
	public function home(){
        $products = Products::orderBy("position","ASC")->get();
        return view("user.home",compact('products'));
    }

    public function shop(){
        $categories = Categories::orderBy("position","ASC")->get();
        return view("user.shop",compact('categories'));
    }
    public function learn(){
        return view("user.learn");
    }
    public function search(){
if(request("search") != null){
$products = Products::orderBy("position","ASC")->where("name","LIKE","%".request('search').'%')->get();
        return view("user.search",compact('products'));

}
    }
    public static function getFromCategory($categoryId){
      return Products::where('categoryId',$categoryId)->orderBy("position","ASC")->get();
    }
    public function showModel(){
        if (request("productId")) {
            $product = Products::where('productId',request("productId"))->get()->first();
            return view("user.partials.quickView",compact("product"));
        }
    }
}
