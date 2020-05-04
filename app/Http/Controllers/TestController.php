<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use\Session;

class TestController extends Controller
{
  public function index(){
   	return view('Admin.pages.index');
   }
  public function signup(){
   	return view('Admin.pages.signup');
   }
  public function login()
    {
        return view('login');
    }

  public function loginstore(Request $req){
     /// dd($req);
        // echo $req->email;
         $email = $req->email;
          $password = md5($req->password);
         
          $obj = User::where('email','=',$email)
                    ->where('password','=',$password)
                    ->first(); 
                    if($obj){ 
                        
                        $req->session()->put('userid',$obj->id);
                        $req->session()->put('username',$obj->name);
                        $req->session()->put('userrole',$obj->role);

                      
                            if($obj->role=='Admin')
                        {
                            return redirect()->to('Admin/index');
                        }
                         else if($obj->role=='User')
                        {
                            return redirect()->to('User/index');
                        }
                        else 
                    {
                        echo 'Invalid email or password';
                    }
                
                }
        }
    public function store(Request $request)
    {
        $obj = new User();
        $obj->fullname = $request->name;
        $obj->email = $request->email;
        $obj->username = $request->username;
        $obj->password = $request->password;
         $obj->role =  $request->role; 
          if($obj->save()){
            return redirect()->to('login');
          } 
    }

    public function logout()
    {
      Session::flush();
      return redirect()->to('login');
    }


    public function  User_index(){
      return view('User.pages.index');
    }


    public function Sarah(){
      dd("I Love You");
    }

}
