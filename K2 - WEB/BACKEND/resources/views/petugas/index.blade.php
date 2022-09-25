@extends('layout.master')

@section('konten')
<h4 class="txt-cyan"><b>Data Petugas</b></h4>
<a type="button" href="/tambahpetugas" class="btn btn-cyan">Tambah</a><br><br>
<table class="table">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
    </thead>
    @foreach ($all as $row)
        <tbody>
            <td>{{$loop->iteration}}</td>
            <td>{{$row->nama_petugas}}</td>
            <td>{{$row->username}}</td>
        </tbody>
    @endforeach
  </table>
@endsection