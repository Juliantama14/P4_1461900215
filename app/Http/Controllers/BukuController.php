<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = DB::table('buku')
        ->join('jenis_buku', 'buku.id', '=', 'jenis_buku.id')
        ->get();
        return view('buku0215', compact('buku'));
    }
}