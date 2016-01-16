<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Articles;

class laraController extends Controller
{
    public function articles(){
    	$articles = Articles::latest()->get();
    	return view('pages.main', compact('articles'));
    }

    public function show($id){
    	$single = Articles::findOrFail($id);
    	return view('pages.one', compact('single'));
    }

    public function create(){
    	return view('pages.create');
    }
}
