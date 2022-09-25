@extends('layout.master')

@section('konten')
<h4 class="txt-cyan"><b>Tambah Petugas</b></h4>
<form action="/simpanpetugas" method="POST">
    @csrf
    <div class="form-group">
      <label>Nama Petugas</label>
      <input type="text" class="form-control" name="nama">
      {{-- <small class="form-text text-danger">We'll never share your email with anyone else.</small> --}}
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username">
        {{-- <small class="form-text text-danger">We'll never share your email with anyone else.</small> --}}
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
        {{-- <small class="form-text text-danger">We'll never share your email with anyone else.</small> --}}
      </div>
    <button type="submit" class="btn btn-cyan">Tambah Data</button>
  </form>
@endsection