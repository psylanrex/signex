<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Image;


class Photo extends Model
{
    protected $fillable = ['name', 'path', 'thumbnail_path'];

    protected $baseDir = 'photos/gallery/big';

    protected $thumbDir = 'photos/gallery/thumbnails';

    public static function named($name) {
    	return (new static)->saveAs($name);
    }

    public function saveAs($name) {
    	$this->name = sprintf("%s-%s", time(), $name);
    	$this->path = sprintf("%s/%s", $this->baseDir, $this->name);
    	$this->thumbnail_path = sprintf("%s/tn-%s", $this->thumbDir, $this->name);
    	return $this;
    }

    public function move(UploadedFile $file) {
    	$file->move($this->baseDir, $this->name);
    	Image::make($this->path)
    			->fit(200)
    			->save($this->thumbnail_path);
    	return $this;
    }

    // public function delete() {
    //     \File::delete([
    //         $this->path,
    //         $this->thumbnail_path
    //     ]);
    //     parent::delete();
    // }
}
