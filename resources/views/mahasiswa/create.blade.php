@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Masukkan Data Mahasiswa</h1>
        <form action="/mahasiswa/store" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class="mb-3">
                <label>NRP</label>
                <input type="int" name="nrp" class="form-control" placeholder="Masukan NRP">
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <input type="string" name="kelas" class="form-control" placeholder="Masukan Kelas">
            </div>
            
            <label>Jenis kelamin</label>
            <select class ="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select><br>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" rows="10" class="form-control" placeholder="Masukan Alamat"></textarea><br>
            </div>
            
            <input type="submit" class="btn btn-success" name="submit" value="save">
        </form>
    </div>
@endsection