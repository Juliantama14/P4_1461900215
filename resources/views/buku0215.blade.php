@extends('layout/main0215')
@section('title','Buku')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-7">
            <h1 class='mt-3'>Daftar Buku</h1>
            <a href="export-excel">download xls</a>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Tahun  </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ( $buku as $buku)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->jenis }}</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>    
    </div>
</div>
@endsection