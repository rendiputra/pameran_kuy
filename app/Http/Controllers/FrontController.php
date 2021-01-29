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

class FrontController extends Controller
{
    public function index()
    {
        $data = DB::table('karya')
                ->join('users','karya.id_user','users.id')
                ->where('karya.status',1)
                ->orderBy('karya.visitors', 'desc')
                ->take(8)
                ->get();
        $data2 = DB::table('users')
                ->where('isAdmin',1)
                ->get();
        $data3 = DB::table('karya')
                ->where('status','1')
                ->get();
        $jml_user = count($data2);
        $jml_karya = count($data3);
        // dd($jml_karya);
        return view('landing',
            ['data'=>$data,
            'jml_user'=>$jml_user,
            'jml_karya'=>$jml_karya],
        );
    }

    public function tentang_kami()
    {
        return view('user.tentang_kami');
    }

    public function show_galeri()
    {
        $data = DB::table('karya')
                ->join('users','karya.id_user','users.id')
                ->where('karya.status',1)
                ->orderBy('karya.updated_at', 'desc')
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
            if(Auth::user()){
                if($data->id_user == Auth::user()->id){
                    return view('user.galeri_detail',['data'=>$data]);
                }else{
                    DB::table('karya')->where('id_karya','=', $id)->increment('visitors');
                    return view('user.galeri_detail',['data'=>$data]);
                }
            } else{
                DB::table('karya')->where('id_karya','=', $id)->increment('visitors');
                return view('user.galeri_detail',['data'=>$data]);
            }
        }
    }
}