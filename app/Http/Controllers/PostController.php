<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use App\Foto;

class PostController extends Controller
{
    public function postalbum(Request $r)
    {
        foreach ($r->foto as $k => $v) {
                $extension[$k]        = collect(explode('.', $v)); // getting file extension
                $gambar[$k]           = $extension[$k]->first().'_'.date('d-m-y').'_.'.$extension[$k]->last();

                $foto[$k] = new Foto;
                $foto[$k]->id_album     = 1;
                $foto[$k]->type         = 'album';
                $foto[$k]->foto         = $gambar[$k];
                $foto[$k]->save();
        }  

        return redirect()->back();

    }
    public function postfotoalbum(Request $r)
    {
        $manager      = Input::file('file');
        // Image::make($image->getRealPath())->resize(468, 249)->save('public/img/products'.$filename);
        $extension    = $manager->getClientOriginalExtension(); // getting file extension
        $gambar       = $manager->getClientOriginalName().'-'.date('d-m-y').'.'.$extension;
        $path         = public_path('img/'.$gambar);
        $fit          = Image::make($manager->getRealPath())->save($path);
    }

    public function postsingle(Request $r)
    {
        foreach ($r->pict as $k => $v) {
                $extension[$k]        = collect(explode('.', $v)); // getting file extension
                $gambar[$k]           = $extension[$k]->first().'_'.date('d-m-y').'_.'.$extension[$k]->last();

                $foto[$k] = new Foto;
                $foto[$k]->id_album     = 1;
                $foto[$k]->type         = 'single';
                $foto[$k]->foto         = $gambar[$k];
                $foto[$k]->save();
        }  

        return redirect()->back();

    }
    public function postfotosingle(Request $r)
    {
        $manager      = Input::file('file');
        // Image::make($image->getRealPath())->resize(468, 249)->save('public/img/products'.$filename);
        $extension    = $manager->getClientOriginalExtension(); // getting file extension
        $gambar       = $manager->getClientOriginalName().'-'.date('d-m-y').'.'.$extension;
        $path         = public_path('img/'.$gambar);
        $fit          = Image::make($manager->getRealPath())->save($path);
    }
}
