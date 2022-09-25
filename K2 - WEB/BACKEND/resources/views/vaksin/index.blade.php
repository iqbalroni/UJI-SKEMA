@extends('layout.master')

@section('konten')
<h4 class="txt-cyan"><b>Data Vaksin</b></h4>
<a type="button" href="/tambahvaksin" class="btn btn-cyan">Tambah</a><br><br>
<table class="table">
    <thead>
        <th>No</th>
        <th>NIK</th>
        <th>Nama Warga</th>
        <th>Periode</th>
        <th>Deskripsi</th>
        <th>petugas</th>
    </thead>
    @foreach($all as $row)
        <tbody>
            
            <td>{{$loop->iteration}}</td>
            <td>{{$row->nik}}</td>
            <td>{{$row->nama_warga}}</td>
            <td>{{$row->periode}}</td>
            <td>{{$row->deskripsi}}</td>
            <td>{{$row->nama_petugas}}</td>
            
        </tbody>
        @endforeach
  </table>
@endsection