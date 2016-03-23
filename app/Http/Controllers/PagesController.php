<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Image;

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
		$file->move('photos/gallery/big', $name);
		$path = "photos/gallery/big/{$name}";
        $thumbnail_name = 'tn-' . $name;
        $thumbnail_path = "photos/gallery/thumbnails/{$thumbnail_name}";

        Image::make($path)->fit(200)->save($thumbnail_path);
		
		Photo::create(["name" => $name, "path" => $path, "thumbnail_path" => $thumbnail_path]);
		
	}

    
}
