<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\Data_1461900215Exports;
use Maatwebsite\Excel\Facades\Excel;


class Data_1461900215Controller extends Controller
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

    public function export()
    {
        return Excel::download(new Data_1461900215Exports, 'data_1461900215.xlsx');
    }
}