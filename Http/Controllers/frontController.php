<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class frontController extends Controller
{
    public function __construct () {

    }

    public function index () {
    	$setups = DB::table('setups')->first();

        $cats = DB::table('categories')->where('status','on')->get();
        $about = DB::table('contentas')->where('category','home')->first();
    	return view('frontend.index',[
    		'setups'=>$setups,
            'cats'=>$cats,
            'about'=>$about,
    		
    		
    	]);
    }
}
