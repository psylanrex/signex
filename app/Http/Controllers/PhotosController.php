<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Photo;

class PhotosController extends Controller
{
	public function index() {
		$photos = Photo::all();
		return view('pages.gallery', compact('photos'));
	}

	public function addPhoto(Request $request) {
		$file = $request->file('file');
		$name = time() . $file->getClientOriginalName();
		$file->move('photos/gallery', $name);
		$path = "/photos/gallery/{$name}";
		
		Photo::create(["name" => $name, "path" => $path]);
		return redirect('/admin/gallery');
	}    
}
