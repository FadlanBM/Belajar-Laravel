<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
        return "<h1>Saya siswa dari index</h1>";
    }
    function detail($id){
        return "<h1>Saya siswa dari detail dengan id $id </h1>";
    }
}
