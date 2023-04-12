@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Edit Data Mahasiswa</h1>
        <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
            @method("put")
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" placeholder="Masukan Nama">
            </div>
            <div class="mb-3">
                <label>NRP</label>
                <input type="int" name="nrp" class="form-control" value="{{ $mahasiswa->nrp }}" placeholder="Masukan NRP">
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <input type="string" name="kelas" class="form-control" value="{{ $mahasiswa->kelas }}" placeholder="Masukan Kelas"><br>
            </div>

            <label>Jenis kelamin</label>
            <select class ="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($mahasiswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                <option value="P" @if($mahasiswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select><br>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" rows="10" class="form-control" placeholder="Masukan Alamat">{{ $mahasiswa->alamat }}</textarea><br>
            </div>

            <input type="submit" name="submit" class="btn btn-success" value="update">
        </form>
    </div>
@endsection