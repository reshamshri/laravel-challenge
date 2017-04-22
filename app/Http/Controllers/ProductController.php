<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use Carbon\Carbon;
use Storage;


class ProductController extends Controller
{

	public function index(){
	    
	}  
    public function create(){
		return view('product.create');
	}

	public function store(ProductRequest $request){
		$contents=json_encode($request->all());
		$file = Carbon::now();
		Storage::disk('local')->put('public/'.$file, $contents);
		echo $contents;
		
	}

}
