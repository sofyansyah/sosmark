<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use File;
use App\Foto;
use App\Post;
use App\Album;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('post',compact('post'));
    }
    public function album()
    {
        $album = Album::all();
        return view('album',compact('album'));
    }
    public function postalbum(Request $r)
    {
        $post = new Post;
        $post->tanggal  = $r->date;
        $post->type     = 'album';
        $post->caption  = $r->caption;
        $post->save();

        $cek_post         = Post::orderBy('id','DESC')->first();

        foreach ($r->foto as $k => $v) {
                $extension[$k]        = collect(explode('.', $v)); // getting file extension
                $gambar[$k]           = $extension[$k]->first().'_'.date('d-m-y').'_album.'.$extension[$k]->last();

                $foto[$k] = new Foto;
                $foto[$k]->id_album     = $cek_post->id;
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
        $name         = collect(explode('.', $manager->getClientOriginalName())); // getting file extension
        $gambar       = $name->first().'_'.date('d-m-y').'_album.'.$extension;
        $path         = public_path('img/'.$gambar);
        $fit          = Image::make($manager->getRealPath())->save($path);
    }

    public function postsingle(Request $r)
    {

        $post = new Post;
        $post->tanggal  = $r->date;
        $post->type     = 'post';
        $post->caption  = $r->caption;
        $post->save();

        $cek_post         = Post::orderBy('id','DESC')->first();
        $extension        = collect(explode('.', $r->pict)); // getting file extension
        $gambar           = $extension->first().'_'.date('d-m-y').'_single.'.$extension->last();
        // dd($r->pict);

        $foto = new Foto;
        $foto->id_album     = $cek_post->id;
        $foto->type         = 'single';
        $foto->foto         = $gambar;
        $foto->save();

        return redirect()->back();

    }
    public function postfotosingle(Request $r)
    {
        $manager      = Input::file('file');
        // Image::make($image->getRealPath())->resize(468, 249)->save('public/img/products'.$filename);
        $name         = collect(explode('.', $manager->getClientOriginalName())); // getting file extension
        $extension    = $manager->getClientOriginalExtension(); // getting file extension
        $gambar       = $name->first().'_'.date('d-m-y').'_single.'.$extension;
        $path         = public_path('img/'.$gambar);
        $fit          = Image::make($manager->getRealPath())->save($path);
    }
    public function hapussingle($id)
    {
        $post = Post::findOrFail($id);
        $foto = Foto::where('id_album', $post->id)->where('type','single')->get();

        if (!empty($foto)) {
            foreach ($foto as $v) {
                $file = File::delete(public_path().'/img/'.$v->foto);
                $post->delete();
                Foto::where('id_album', $post->id)->delete();
            }
        }

        return redirect()->back()->with('success', 'Berhasil menghapus post');
    }
    public function editsingle(Request $r,$id)
    {
        $post = Post::findOrFail($id);
        $post->caption = $r->caption;
        $post->save();

        return redirect()->back()->with('success', 'Berhasil menghapus foto');
    }
}
