<?php

namespace App\Http\Controllers;

use App\Models\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class BaseController extends Controller
{
    public function index(){
        $this->middleware('auth');
        return view('home.index');
    }

    public function login(){
        return view('login.index');
    }

    public function main(){
        return view('main.index');
    }

    public function payment(){
        return view('pembayaran.index');
    }

    public function bio(Request $request){
        return view('biodata.index');
    }

    public function store(Request $request){
        $name = $request->input('img');

        // $request->file('img')->storeAs('public/img/', $name);

        $query = DB::table('biodata')->insert([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'gender'=>$request->input('gender'),
            'religius'=>$request->input('religius'),
            'birth_date'=>$request->input('birth_date'),
            'birth_place'=>$request->input('birth_place'),
            'no_telp'=>$request->input('no_telp'),
            'status'=>$request->input('status'),
            'school_history'=>$request->input('school'),
            'image'=>$name,
            'test_type'=>$request->input('test'),
        ]);

        // $request->session()->put('nama','Diki Alfarabi Hadi');

        if($query){
            return redirect()->back();
        }else{
            return back()->with('fail','Something when wrong');
        }
    }

    public function setting(){
        return view('rules.index');
    }

    public function information(){
        return view('info.index');
    }

    // public function store(Request $request){
    //     $size = $request->file('img')->getSize();
    //     $name = $request->file('img')->getClientOriginalName();

    //     $request->file('img')->storeAs('../../public/img/', $name);

    //     $query = DB::table('service')->insert([
    //         'id_service'=>$request->input('NULL'),
    //         'service_name'=>$request->input('name'),
    //         'price'=>$request->input('price'),
    //         'category'=>$request->input('category'),
    //         'description'=>$request->input('desc'),
    //         'image'=>$name
    //     ]);
    //     return redirect()->back();
    // }
}
