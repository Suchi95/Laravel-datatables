<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Contact;

class ContactFormController extends Controller
{
  public function index(){
  	 return view ('contact');
  }
  public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'birth_date'=> 'required|date|before_or_equal:2000-12-18',
            'message' => 'required',
        ]);
       
         $check = Contact::create($request->all());

         return Redirect::to("contact-us")->withSuccess('Form successfully submit');
 
    }
}
