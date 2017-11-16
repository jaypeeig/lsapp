<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function  index(){
    	$data = Array(
    		'title' => 'Welcome to Laravel',
    		'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolore distinctio quaerat necessitatibus. Architecto quam ratione ullam excepturi iusto, sapiente earum placeat delectus assumenda molestias expedita amet enim soluta consectetur.'
    		);
    	return view('pages.index')->with($data);
    }

    public function  services(){
    	$data = Array(
    		'title' => 'Services',
    		'services' => ['Web Design','UI/UX','SEO']
    		);
    	return view('pages.services')->with($data);
    }

    public function  about(){
    	return view('pages.about');
    }
}
