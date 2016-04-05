<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Http\Requests;
use App\Photo;
use DB;

class PhotosController extends Controller
{
	public function index() {
    	return view("admin.main-content");
    }

    public function create() {
    	return view("photos.create");
    }


    public function store(Request $request) {
    	$file = $request->file('file');
		
        $photo = $this->makePhoto($file);

        $photo->save();
    }

    public function show($id) {
        $photo = Photo::findOrFail($id);
        return view('photos.show', compact('photo'));
    }

    public function destroy($id) {
        Photo::findOrFail($id)->delete();
        return back();
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
