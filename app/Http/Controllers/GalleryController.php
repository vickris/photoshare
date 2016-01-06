<?php

namespace App\Http\Controllers;
use Illuminate\Http\Requests;

class GalleryController extends Controller
{
    public function viewGalleryList()
    {
        return view('gallery.gallery');
    }

    public function saveGallery(Request $request)
    {

    }


    public function viewGalleryPics()
    {
        # code...
    }

    public function upload(Request $request)
    {
        # code...
    }




}