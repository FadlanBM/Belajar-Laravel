<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){
        return view("halaman/index");
    }
    function tentang(){
        return view("halaman/tentang");
    }
    function kontak(){
        $data=[
            'judul'=>'ini adalah contact',
            'kontak'=>[
                'email'=>'Fadlan@gmail.com',
                'hp'=>'0231231231312']
            ];
        return view("halaman/kontak")->with($data);
    }
}
