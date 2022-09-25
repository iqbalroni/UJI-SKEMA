@extends('layout.master')

@section('konten')

<h4 class="txt-cyan"><b>Tambah Data Vaksin</b></h4>
<form action="/simpanvaksin" method="POST">
    @csrf
    <div class="form-group">
        <label>NIK</label>
        <input type="text" class="form-control" name="nik">
        {{-- <small class="form-text text-danger">We'll never share your email with anyone else.</small> --}}
    </div>
    <div class="form-group">
      <label>Periode</label>
      <div class="input-group mb-3">
        <select class="custom-select" id="inputGroupSelect01" name="periode">
          <option value="">Pilih Vaksin</option>
          <option value="1">Vaksin ke -1</option>
          <option value="2">Vaksin ke -2</option>
          <option value="3">Vaksin ke -3</option>
          <option value="4">Vaksin ke -4</option>
        </select>
      </div>
      {{-- <small class="form-text text-danger">We'll never share your email with anyone else.</small> --}}
    </div>
    
    <div class="form-group">
        <label>Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi">
        {{-- <small class="form-text text-danger">We'll never share your email with anyone else.</small> --}}
      </div>
    <button type="submit" class="btn btn-cyan">Tambah Data</button>
  </form>
@endsection