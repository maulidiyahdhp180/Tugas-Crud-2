@extends('layout/main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

            <form method="post" action="/students/{{ $student->id }}">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ $student->nama }}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukkan nis" name="nis" value="{{ $student->nis }}">
                    @error('nis')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Masukkan kelas" name="kelas" value="{{ $student->kelas }}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{ $student->jurusan }}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Ubah Data!</button>
            </form>

        </div>
    </div>
</div>
   
@endsection
