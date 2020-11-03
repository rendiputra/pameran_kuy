<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use image;
use DB;
USE Validator;
// USE Paginate;

// model
use App\karya;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // public function galeri()
    // {
    //     return view('user.galeri');
    // }

    public function create_karya()
    {
        return view('seniman.create_karya');
    }

    public function tambah_karya(Request $req)
    {
        $req->validate([
            'nama_karya'=> 'required|max:100',
            'up_foto'=> 'required|image|mimes:png,jpg,jpeg',
            'tahun'=> 'required|numeric',
            'media'=> 'required|max:50',
            'dimensi'=> 'required|max:50',
            'deskripsi'=> 'required'
        ],
        [
            'nama_karya.required'=> 'Nama Karya tidak boleh kosong',
            'up_foto.required'=> 'Upload foto tidak boleh kosong',
            'up_foto.mimes'=> 'Upload foto harus berformat .png, .jpg, .jpeg',
            'up_foto.image'=> 'Upload foto harus berformat .png, .jpg, .jpeg',
            'tahun.required'=> 'Tahun tidak boleh kosong',
            // 'tahun.numeric'=> 'Tahun harus berisikan angkan 4 digit',
            // 'tahun.max'=> 'Tahun harus berisikan angkan 4 digit',
            'media.required'=> 'Media tidak boleh kosong',
            'dimensi.required'=> 'Dimensi tidak boleh kosong',
            'deskripsi.required'=> 'Deskripsi tidak boleh kosong'
        ]);

        $img = $req->up_foto;

        $name = time().'.'.$img->getClientOriginalExtension();
        $lokasi = public_path('foto_karya');

        if($img->move($lokasi,$name)){
            $karya = new karya;
            $karya->id_user = Auth::user()->id;
            $karya->nama_karya = $req->nama_karya;
            $karya->tahun_karya = $req->tahun;
            $karya->media = $req->media;
            $karya->dimensi = $req->dimensi;
            $karya->deskripsi = $req->deskripsi;
            $karya->gambar = $name;

            if($karya->save()){
                // return back()->with('sukses','Berhasil submit karya!');
                return redirect()->route('create_karya')->with('sukses','Berhasil submit karya!');
            }
            return redirect()->back()->with('eror','Gagal submit karya!');
        }
    }

    public function show_galeri()
    {
        $data = DB::table('karya')
                ->join('users','karya.id_user','users.id')
                ->paginate(8);
        return view('user.galeri',['data'=>$data]);
    }

    public function show_galeri_detail($id)
    {
        $data = DB::table('karya')
                ->join('users','karya.id_user','users.id')
                ->where('karya.id_karya', $id)
                ->first();
        if(empty($data)){
            return abort(404);
        } else{
            return view('user.galeri_detail',['data'=>$data]);
        }
    }
    
}
