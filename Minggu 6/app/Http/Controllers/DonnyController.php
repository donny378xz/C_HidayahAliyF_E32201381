<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class DonnyController extends Controller
{
    
    public function index()
    {
        //return 'Halo Nama saya Donny dan Saya lagi belajar Controller Laravel';
        $nama = 'Hidayah Aliy';

        $pelajaran = ['Model,View,Controller'];

        return view('dell', compact('nama', 'pelajaran'));
    }
	
    public function create()
    {
    	return 'Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user';
    }
}    