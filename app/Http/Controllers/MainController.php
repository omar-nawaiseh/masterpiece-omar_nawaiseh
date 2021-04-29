<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    ///////////////////////////////// Admin /////////////////////////////////

    function login(){
        return view("auth.AdminLogin");
    }


    function save(Request $request){
       $request->validate([
        'name'     =>'required',
        'email'    =>'required|email|unique:admins',
        'password' =>'required|min:5|max:12',
       ]);


       $admin =  new Admin;
       $admin -> name      = $request  ->name; 
       $admin -> email     = $request  ->email; 
       $admin -> password  = Hash::make($request  ->password); 
       $save  =  $admin     -> save();

       if ($save) {
           return back()->with('success','New Admin has been successfuly added');
       }else{
           return back()->with('fail','something went wrong, try again later');
       }

    }

    function check(Request $request){
        $request->validate([
            'email'    =>'required|email',
            'password' =>'required|min:5|max:12',
           ]);


           $userInfo = Admin::where('email','=', $request->email)->first();

           if (!$userInfo) {
            return back()->with('fail','we do not recognize your email address');
           }else{

            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/admin/dashboard');

            }else{
                return back()->with('fail','Incorrect password');
            }
           }
    }

    function dashboard(){
        
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard', $data );
    }

    function Admins(){
        $dataa= array(
            'list'=> \DB::table('admins')->get()
        );
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.Admins', $data , $dataa );
    }

    function logout(){
        
            if(session()->has('LoggedUser')) {
                session()->pull('LoggedUser');
                return redirect('/admin');
            }
           
    }

    function delete($id){
        $delete = \DB::table('admins') 
                   ->where('id',$id)
                   ->delete();
        return redirect('/admin/Admins');           
    }
    


    function edit($id){
        $row = \DB::table('admins') 
                   ->where('id',$id)
                   ->first();
        
        $datau= array(
             'Info'=> $row,
             'Title'=>'Edit'
          );

        
        return view('/admin/edit', $datau);           
    }
    
    function update(Request $request){
        $request->validate([

            'name'    =>'required',
            'email'    =>'required|email',
            'password' =>'required|min:5|max:12',
           ]);  
           
        $updating = \DB::table('admins') 
                   ->where('id',$request->input('cid'))
                   ->update([
                       'name'=>$request->input('name'),
                       'email'=>$request->input('email'),
                       'password'=>Hash::make($request  ->input('password')),
                   ]);
                   return redirect('/admin/Admins');


    }

         /////////////////////// User /////////////////////////////

    function Users(){
        $dataa= array(
            'list'=> \DB::table('users')->get()
        );
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.Users' , $data ,$dataa );
    }


    function deleteu($id){
        $delete = \DB::table('users') 
                   ->where('id',$id)
                   ->delete();
        return redirect('/admin/Users');           
    }
    


    function editu($id){
        $row = \DB::table('users') 
                   ->where('id',$id)
                   ->first();
        
        $datau= array(
             'Info'=> $row,
             'Title'=>'Edit'
          );

        
        return view('/admin/editu', $datau);           
    }



    function updateu(Request $request){
        $request->validate([

            'name'    =>'required',
            'email'    =>'required|email',
            'password' =>'required|min:5|max:12',
           ]);  
           
        $updating = \DB::table('users') 
                   ->where('id',$request->input('cid'))
                   ->update([
                       'name'=>$request->input('name'),
                       'email'=>$request->input('email'),
                       'password'=>Hash::make($request  ->input('password')),
                   ]);
                   return redirect('/admin/Users');
    }


    
}
