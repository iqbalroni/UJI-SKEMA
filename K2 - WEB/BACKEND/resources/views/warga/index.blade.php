@extends('layout.master')

@section('konten')
    <h4 class="txt-cyan"><b>Data Warga</b></h4>
    <div class="row">
        <div class="col-sm-4">
            <a type="button" href="/tambahwarga" class="btn btn-cyan">Tambah</a>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="/warga" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Nama" name="cari" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-cyan" type="submit" id="button-addon2">Cari</button>
                    </div>
                  </div>
            </form>
        </div>
    </div>
    <br><br>
    <table class="table">
        <thead>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat,Tanggal Lahir</th>
            <th>Alamat Rumah</th>
            <th>Nomor Telfon</th>
            <th>Action</th>
        </thead>
        @foreach($datawarga as $row)
            <tbody>
                
                <td>{{$loop->iteration}}</td>
                <td>{{$row->nik}}</td>
                <td>{{$row->nama_warga}}</td>
                <td>{{$row->tempat_lahir}},{{$row->tanggal_lahir}} </td>
                <td>{{$row->alamat_rumah}}</td>
                <td>{{$row->no_hp}}</td>
                <td>
                    <a href="/editwarga/{{$row->nik}}" type="button" class="btn btn-warning">edit</a><br>
                    <a href="/hapuswarga/{{$row->nik}}" type="button" class="btn btn-danger mt-1">Hapus</a>
                </td>
                
            </tbody>
            @endforeach
      </table>
@endSection