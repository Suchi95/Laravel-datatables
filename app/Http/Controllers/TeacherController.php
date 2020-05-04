<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function add(){
    	return view('teacher-add');
    }
    public function store(Request $request){
    	$validatedData = $request->validate([
        'name' => array('required','regex:/^[a-zA-Z ]*$/'),
        'email'=> 'required|email|unique:teachers,email',
        'birth_date'=> 'required|date|before_or_equal:2000-12-12',
        'salary'=> 'required|integer|between:1000,5000',
        'password'=>'required|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'
    ]);
    }
}
