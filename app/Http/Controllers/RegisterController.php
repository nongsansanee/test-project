<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    public function index()
	{
		return view("register");	
	}
	public function save(Request $request)
	{
        $name = $request->input('name');
        $lname = $request->input('lname');
        $gender = $request->input('gender');
        //print_r($name);
        //print_r($lname);
		$data = array( 
            'name' => $name ,'lname'=>$lname,'gender'=>$gender
		);
		return view("register",$data);	
	}
}