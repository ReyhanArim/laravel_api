@extends('layouts.master')

@section('content')
    <div class="container">
        <a href="/mahasiswa/create" class="btn btn-primary">[+]Tambah Data Mahasiswa</a>
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>NRP</td>
                <td>Kelas</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>

            @foreach ($mahasiswa as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->nama}}</td>
                    <td>{{$m->nrp}}</td>
                    <td>{{$m->kelas}}</td>
                    <td>{{$m->jenis_kelamin}}</td>
                    <td>{{$m->alamat}}</td>
                    <td class="btn-group-vertical">
                        <a href="/mahasiswa/{{$m->id}}/edit" class="btn btn-warning">edit</a>
                        <form action="/mahasiswa/{{$m->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach  
        </table>
    </div>
@endsection