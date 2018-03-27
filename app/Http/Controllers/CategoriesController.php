<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller{
    
    public function index(){
        $categories = Categories::orderBy("position","ASC")->get();
        return view('admin.categories',compact("categories"));
    }
    public function create(){
      return view('admin.addCategorie');
    }
    public function store(){
        $data = request()->validate([
            'name' => 'required|string'
        ]);
        $data["categorieId"] = rand(100000,999999);
        Categories::create($data);
        Session()->flash("message","Categorie Sucessfully Added");
        return redirect("/categories");
    }
    public function edit(){
        $categorie = Categories::where("categorieId",request("categorieId"))->get()->first();
        return view('admin.editCategorie',compact("categorie"));
    }
    public function update(){
        $data = request()->validate([
            'categorieId'=>"required",
            'name' => 'required|string'
        ]);
        $categorie = Categories::where("categorieId",$data["categorieId"])->update($data);
        Session()->flash("message","Categorie Sucessfully Updated");
        return redirect("/categories");
    }
   public function destroy(){
        Categories::where("categorieId",request("categorieId"))->delete();
        Session()->flash("error","Categorie Sucessfully Deleted");
        return redirect("/categories");
    }
   public function updatePosition(){
     if (count(request("positionData"))){
        foreach (request("positionData") as $key => $value) {
            $key = $key+1;
            Categories::where("categorieId",$value)->update(["position"=>$key]);
     }
        $message["message"] = "Positions Sucessfully Updated."; 
        return response()->json($message, 200);
    }
    }
}
