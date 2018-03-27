<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view("admin.login");
    }
    public function loginPost(){
    $data = $this->validate(request(),[
        'email' => 'required|email|min:10',
        'password' => 'required|min:8'
    ]);
     if(auth()->attempt($data) == FALSE) {
     return back()->withErrors([
        'message'=>'Please Chk your Credentials and Try Again.'
    ]);
   }
    return redirect("/products");
}
    public function logout(){
        auth()->logout();
        return redirect()->route('adminLogin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("admin.users",compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("admin.addUser");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $user = $this->validate(request(),[
        'name' => 'required|min:5',
        'email' => 'required|email|min:10',
        'password' => 'required|confirmed|min:8',
        'type'=>'required'
]);
        $chk = User::where('email','=',request('email'))->count();
        if($chk){
        Session()->flash('error', "Email Already Exist");
        return back();
        }

       User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),
            'type'=>request('type')
        ]);
        Session()->flash('message', "User Added Sucessfully");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::where("email",request("email"))->get()->first();
        return view("admin.editUser",compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(request("password") != null){
        $data  = request()->validate([
            'name'=>'required|min:5',
            'email' => 'required|email|min:10',
            'type' => 'required',
            'password'=>'required|confirmed|min:8'
        ]);

        $user =  User::where('email',request('email'))->update([
            'name'=>request('name'),
            'password'=>bcrypt(request('password')),
            'type'=>request('type')
        ]);
        }else{
        $data  = request()->validate([
            'name'=>'required|min:5',
            'email' => 'required|email|min:10',
            'type' => 'required'
        ]);
        $user =  User::where('email',request('email'))->update([
            'name'=>request('name'),
            'type'=>request('type')
        ]);
        }
        if($user){
        Session()->flash('message', "User Updated Sucessfully");
        return redirect("/users");
        }else{
        Session()->flash('error', "User Not Updated Sucessfully");
        return back();
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(){
        if(request("email") == auth()->user()->email){
            Session()->flash("error","You Dont Have Authority To Delete This Account");
            return back();
        }
        if(User::where("email",request("email"))->delete()){
            Session()->flash("message","User Successfully Deleted");
            return redirect("/users");
        }else{
            Session()->flash("error","User Is Not Successfully Deleted");
            return back();
        }
    }
}
