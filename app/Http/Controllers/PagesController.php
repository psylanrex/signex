<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
		
        $photo = $this->makePhoto($file);

        $photo->save();
	}

    protected function makePhoto(UploadedFile $file) {
        return Photo::named($file->getClientOriginalName())->move($file);
    }

    protected function move(Photo $photo) {
        $photo->move($photo->path);
        return $photo;
    }

    protected function makeThumbnail(Photo $photo) {
        Image::make($photo->path)
             ->fit(200)
             ->save($photo->thumbnail_path);
    }
    
}
