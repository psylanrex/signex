<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image;

use App\Http\Requests;
use App\Photo;
use DB;

class PagesController extends Controller
{
    public function index() {
    	return view("pages.admin");
    }

    public function create() {
    	return view("pages.create");
    }

    public function store() {

    }

    public function show() {
    	$photos = DB::select('select * from photos');
    	return view("admin.show", compact('photos'));
    }

    public function addPhoto(Request $request) {
		$file = $request->file('file');
		$name = time() . $file->getClientOriginalName();
		$file->move('photos/gallery', $name);
		$path = "/photos/gallery/{$name}";
		
		Photo::create(["name" => $name, "path" => $path]);
		
	}

    
}
