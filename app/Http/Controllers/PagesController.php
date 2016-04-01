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

    public function show_gallery() {
    	$photos = DB::select('select * from photos');
    	return view("pages.gallery", compact("photos"));
    }
}
