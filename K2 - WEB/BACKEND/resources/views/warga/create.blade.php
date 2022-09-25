@extends('layout.master')

@section('konten')
<h4 class="txt-cyan"><b>Tambah Data Warga</b></h4>
<form action="/simpanwarga" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>NIK</label>
                <input type="text" class="form-control" name="nik">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>tanggal lahir</label>
                <input type="date" class="form-control" name="tanggal">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Nomor Hp</label>
                <input type="number" class="form-control" name="no_hp">
            </div>
        </div>
    </div>
    <button class="btn btn-cyan">Simpan Data</button>
</form>

@endsection