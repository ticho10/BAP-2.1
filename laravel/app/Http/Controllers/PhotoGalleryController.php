<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function listPhotos(){

//        Haal uit database
    $photos = Photo::all();

        return  view('gallery.index',["photos"=> $photos]);
    }

    public function showPhotoForm(){
        return view('gallery.add_photo_form');
    }

    public function  savePhotoForm(Request $request){
        $validData = $request->validate([
                'title' => 'required',
                'description' => 'min:10',
                'photo' => 'required|image',
        ]);

//        Nu gaan we de foto uploaden naar een plek
        $targetFolder = public_path('photos');
        $filename = str_random(16). '.' . $validData['photo']->getClientOriginalExtension();

//        Hier verplaatsen we het bestaand
        $validData['photo']->move($targetFolder,$filename);

//        Nu maken we een nieuwe photo object aan
        $photo = new Photo();
        $photo->fill(
            [
                'title' => $validData['title'],
                'description' => $validData['description'],
                'photo' => $filename,
            ]
        );
//        Dan roepen we save() aan om het echt op te slaan
        $photo->save();

//        Dan sturen we de gebruiker door naar de overzichtspagina
        return redirect()->route('gallery.index');

    }
}
