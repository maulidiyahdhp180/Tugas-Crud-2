@extends('layout/main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

            <form method="post" action="/students">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukkan nis" name="nis" value="{{ old('nis') }}">
                    @error('nis')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Masukkan kelas" name="kelas" value="{{ old('kelas') }}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{ old('jurusan') }}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Tambah Data!</button>
            </form>

        </div>
    </div>
</div>
   
@endsection
