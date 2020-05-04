<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class LaravelController extends Controller
{
    public function add(){
		return view('add');
	}
	public function store(Request $request){
		
		$obj = new Employee();
		$obj->name = $request->name;
		$obj->email = $request->email;
		$obj->birth_date = $request->birth_date;
		$obj->salary = $request->salary;
		 
		  if($obj->save()){
		  	return redirect()->to('/list');
		  } 
		}
		public function all(){
		$data = Employee::all();
		return view('list',['employees'=>$data]);
	}
	public function edit($id){
			$employee = Employee:: find($id);
			return view ('edit',['employee'=>$employee]);
		}
		public function update($id, Request $req){
			$obj = Employee::find($id);
			$obj->name = $req->name;
			$obj->email = $req->email;
			$obj->birth_date = $req->birth_date;
			$obj->salary = $req->salary;
			if($obj->save()){
				//echo 'Successfully Updated';
				return redirect()->to('list');
			}
		}
		public function delete($id){
				$obj = Employee::find($id);
				if ($obj->delete()) {
					return redirect()->to('/list');
				}

		}

}
