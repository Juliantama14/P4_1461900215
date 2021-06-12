<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')
        ->join('jenis_buku', 'buku.id', '=', 'jenis_buku.id')
        ->get();
        return view('buku0215', compact('buku'));
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'Data_1461900215.xlsx');
    }
}
