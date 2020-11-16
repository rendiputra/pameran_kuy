<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use image;
use DB;
USE Validator;
// USE Paginate;

// model
use App\User;
use App\karya;
use App\report_post;

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

    
    
    public function home()
    {
        // sebagai Admin
        if (Auth::user()->isSuperAdmin == 1){
            $pengunjung = DB::table('users')
                ->where([
                    ['isAdmin', '=','0' ],
                    ['isSuperAdmin', '=','0' ],
                ])->get();
            $seniman = DB::table('users')
                ->where('isAdmin','1')
                ->get();
            // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
            $karya = DB::table('karya')
                ->where('status','1')
                ->get();
            $antrianKarya = DB::table('karya')
                ->where('status','0')
                ->get();
            $karyaDitolak = DB::table('karya')
                ->where('status','2')
                ->get();
                
            return view('home', [
                'pengunjung' => $pengunjung,
                'seniman' => $seniman,
                'karya' => $karya,
                'antrianKarya' => $antrianKarya,
                'karyaDitolak' => $karyaDitolak
            ]);

        // sebagai Seniman
        } elseif (Auth::user()->isAdmin == 1) {
            $karya = DB::table('karya')
                ->where([
                    ['id_user', '=', Auth::user()->id ],
                    // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
                    ['status', '<','3' ],
                ])->orderBy('updated_at', 'desc')
                ->paginate(6);
            $jml = count($karya);
            // return $jml;
            return view('home', [
                'karya' => $karya,
                'jml' => $jml,
            ]);
        } else{
            return view('home');
        }
    }



    public function daftar_seniman()
    {
        $data = DB::table('users')
                ->where([
                    ['id', '=' , Auth::user()->id],
                    ['isAdmin', '=' , 0],
                ])->update(
                    // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
                    ['isAdmin'=> 1]
                );
        // return view('user.galeri');
        return redirect()->route('home')->with('sukses','Berhasil mendaftar sebagai seniman.');
    }

    public function create_karya()
    {
        return view('seniman.create_karya');
    }

    public function insert_karya(Request $req)
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

        // cek image
        if($img->move($lokasi,$name)){
            $karya = new karya;
            $karya->id_user = Auth::user()->id;
            $karya->nama_seniman = $req->nama_seniman;
            $karya->nama_karya = $req->nama_karya;
            $karya->tahun_karya = $req->tahun;
            $karya->media = $req->media;
            $karya->dimensi = $req->dimensi;
            $karya->deskripsi = $req->deskripsi;
            $karya->gambar = $name;

            if($karya->save()){
                // return back()->with('sukses','Berhasil submit karya!');
                return redirect()->route('home')->with('sukses','Berhasil submit karya!');
            }
            return redirect()->route('home')->with('error','Gagal submit karya!');
        }
    }

    public function hapus_karya($id)
    {
        DB::table('karya')
            ->where([
                ['id_karya', '=', $id],
                ['id_user', '=', Auth::user()->id]
            ])->update(
                // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
                ['status'=> 3]
            );
        return redirect()->back()->with('sukses','Berhasil menghapus karya.');
    }

    public function edit_karya_show($id)
    {
        // $data ="as";
        $data = DB::table('karya')
                ->where([
                    ['id_karya', '=', $id],
                    ['id_user', '=' , Auth::user()->id],
                    ['status', '=' , 1],
                    
                ])->first();
                // dd(empty($data));
        // $jml = count($data);
        if (!empty($data)){
            return view('seniman.karya_edit', ['data'=>$data]);
        }else{
            return redirect()->route('home')->with('error','Permintaan tidak valid!');
        
        }
        
    }
    public function edit_karya(Request $req)
    {
        $req->validate([
            'nama_karya'=> 'required|max:100',
            'nama_seniman'=> 'required|max:100',
            'up_foto'=> 'image|mimes:png,jpg,jpeg',
            'tahun'=> 'required|numeric',
            'media'=> 'required|max:50',
            'dimensi'=> 'required|max:50',
            'deskripsi'=> 'required'
        ],
        [
            'nama_karya.required'=> 'Nama Karya tidak boleh kosong',
            'nama_seniman.required'=> 'Nama Seniman tidak boleh kosong',
            // 'up_foto.required'=> 'Upload foto tidak boleh kosong',
            'up_foto.mimes'=> 'Upload foto harus berformat .png, .jpg, .jpeg',
            'up_foto.image'=> 'Upload foto harus berformat .png, .jpg, .jpeg',
            'tahun.required'=> 'Tahun tidak boleh kosong',
            'tahun.numeric'=> 'Tahun harus berisikan angka',
            'media.required'=> 'Media tidak boleh kosong',
            'dimensi.required'=> 'Dimensi tidak boleh kosong',
            'deskripsi.required'=> 'Deskripsi tidak boleh kosong'
        ]);
        $cek = karya::find($req->id);
        // dd($cek);
        if($cek){
            if($req->up_foto){
                $img = $req->up_foto;

                $name = time().'.'.$img->getClientOriginalExtension();
                $lokasi = public_path('foto_karya');

                if($img->move($lokasi,$name)){
                    $edit = DB::table('karya')
                            ->where([
                                ['id_karya', '=', $req->id],
                                ['id_user', '=' , Auth::user()->id],
                                ['status', '=' , 1],
                                
                            ])->update([
                                'nama_karya' => $req->nama_karya,
                                'nama_seniman' => $req->nama_seniman,
                                'tahun_karya' => $req->tahun,
                                'media' => $req->media,
                                'dimensi' => $req->dimensi,
                                'deskripsi' => $req->deskripsi,
                                'gambar' => $name,
                                'status' => 0,
                            ]);
                    if($edit){
                        return redirect()->route('home')->with('sukses','Berhasil edit data karya.');
                    }
                    return redirect()->back()->with('error','Gagal edit data karya!');
                }
            }else{
                $edit = DB::table('karya')
                        ->where([
                            ['id_karya', '=', $req->id],
                            ['id_user', '=' , Auth::user()->id],
                            ['status', '=' , 1],
                            
                        ])->update([
                            'nama_karya' => $req->nama_karya,
                            'nama_seniman' => $req->nama_seniman,
                            'tahun_karya'=>$req->tahun,
                            'media'=>$req->media,
                            'dimensi'=>$req->dimensi,
                            'deskripsi'=>$req->deskripsi,
                            'status'=>0,
                        ]);
                if($edit){
                    // return back()->with('sukses','Berhasil submit karya!');
                    return redirect()->route('home')->with('sukses','Berhasil edit data karya!');
                }
                return redirect()->back()->with('error','Gagal edit data karya!');
            }
            

        }else{
            return redirect()->back()->with('error','Gagal submit karya!');
        }
    }

    public function show_galeri()
    {
        $data = DB::table('karya')
                ->join('users','karya.id_user','users.id')
                ->where('karya.status',1)
                ->orderBy('karya.visitors', 'desc')
                ->paginate(9);
        return view('user.galeri',['data'=>$data]);
    }

    public function show_galeri_detail($id)
    {
        $data = DB::table('karya')
                ->join('users','karya.id_user','users.id')
                ->where([
                    ['karya.id_karya','=', $id],
                    ['karya.status', '=' , 1]
                ])
                ->first();
        if(empty($data)){
            return abort(404);
        } else{
            DB::table('karya')->where('id_karya','=', $id)->increment('visitors');
            return view('user.galeri_detail',['data'=>$data]);
        }
    }

    public function list_antrian_karya()
    {
        $karya = DB::table('karya')
                ->where('status','0')
                ->orderBy('updated_at', 'desc')
                ->get();
        $jml = count($karya);
        return view('admin.list_antrian', [
            'karya' => $karya,
            'jml' => $jml,
        ]);
    }

    public function list_post_ditolak()
    {
        $karya = DB::table('karya')
            // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
            ->where('status','2')
            ->orderBy('updated_at', 'desc')
            ->get();
        $jml = count($karya);
        return view('admin.list_post_ditolak', [
            'karya' => $karya,
            'jml' => $jml,
        ]);
    }

    public function list_post_diterima()
    {
        $karya = DB::table('karya')
            // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
            ->where('status','1')
            ->orderBy('updated_at', 'desc')
            ->get();
        $jml = count($karya);
        return view('admin.list_post_diterima', [
            'karya' => $karya,
            'jml' => $jml,
        ]);
    }

    public function list_antrian_karya_detail($id)
    {
        $data = DB::table('karya')
                ->join('users','karya.id_user','users.id')
                ->where([
                    ['karya.id_karya','=', $id],
                    // ['karya.status', '=' , 0]
                ])
                ->first();
        if(empty($data)){
            return abort(404);
        } else{
            return view('admin.list_antrian_detail',['data'=>$data]);
        }
    }

    //action
    public function list_antrian_detail_diterima($id)
    {
        $data = DB::table('karya')
                ->where([
                    // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
                    ['id_karya', '=' , $id],
                ])->update(['status'=>1]);

        return redirect()->route('list_antrian_karya')->with('sukses','Berhasil mengkonfirmasi postingan.');
        // return redirect()->back()->with('sukses','Berhasil mengkonfirmasi postingan.');
    }
    
    //action
    public function list_antrian_detail_ditolak($id)
    {
        $data = DB::table('karya')
            ->where([
                // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
                ['id_karya', '=' , $id],
            ])->update(['status'=>2]);

        return redirect()->route('list_antrian_karya')->with('sukses','Berhasil menolak postingan.');
    }

    public function list_laporan()
    {
        $data = DB::table('report_post')
            ->join('users','report_post.id_user','users.id')
            ->join('karya','report_post.id_karya','karya.id_karya')
            // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
            ->where([
                ['report_post.status_report', '=' , 0], // report belum direspone
                ['karya.status', '>' , 0], //status yang di approve
            ])->orderBy('report_post.updated_at', 'desc')
            ->get();
        $jml = count($data);

        return view('admin.list_laporan',[
            'data'=>$data,
            'jml' => $jml,
        ]);
    }

    public function list_history_laporan()
    {
        $data = DB::table('report_post')
            ->join('users','report_post.id_user','users.id')
            ->join('karya','report_post.id_karya','karya.id_karya')
            // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
            ->where([
                ['report_post.status_report', '<' , 3], // report sudah direspon
            ])->get();
        $jml = count($data);

        return view('admin.list_history_laporan',[
            'data'=>$data,
            'jml' => $jml,
        ]);
    }

    public function terima_laporan_act($id)
    {
        $data = DB::table('report_post')
            ->join('karya','report_post.id_karya','karya.id_karya')
            ->where([
                ['report_post.status_report', '=' , 0], // report belum direspone
                ['karya.status', '=' , 1], //status yang di approve
                // ['karya.id_karya', '=' , $id], 
                ['report_post.id_report', '=' , $id], 
            ])
            ->update(
                // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
                ['karya.status'=>3,
                'report_post.status_report'=>1]
            );
        return redirect()->route('list_laporan')->with('sukses','Berhasil menerima laporan dan menghapus postingan.');
    }
    
    public function tolak_laporan_act($id)
    {
        $data = DB::table('report_post')
            ->join('karya','report_post.id_karya','karya.id_karya')
            ->where([
                ['report_post.status_report', '=' , 0], // report belum direspone
                ['karya.status', '=' , 1], //status yang di approve
                // ['karya.id_karya', '=' , $id], 
                ['report_post.id_report', '=' , $id], 
            ])
            ->update(
                // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
                ['report_post.status_report'=>2]
            );
        return redirect()->route('list_laporan')->with('sukses','Berhasil menerima laporan dan menghapus postingan.');
    }

    public function laporkan(Request $req)
    {
        $req->validate([
            'pesan'=> 'required|max:100',
        ],
        [
            'pesan.required'=> 'Alasan tidak boleh kosong',
            'pesan.max'=> 'Alasan tidak dapat melebihi 100 karakter',
        ]);
        $report = new report_post;
        $report->id_karya = $req->id;
        $report->id_user = Auth::user()->id;
        $report->pesan = $req->pesan;
        // dd($report);
        if($report->save()){
            return redirect()->route('galeri_detail', $req->id)->with('sukses','Berhasil melaporkan!');
        }
        return back()->with('error','Gagal melaporkan!');
    }
    
    
    
}
