<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoryController extends Controller {

	public function getAdd(){
		return view('admin.cate.add',compact(''))
	}

}
