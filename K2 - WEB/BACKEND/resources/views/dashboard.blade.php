@extends('layout.master')

@section('konten')
    <h4 class="txt-cyan">Dashboard</h4>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Warga</h5>
                  <a href="/warga" class="btn btn-cyan">Detail</a>
                </div>
              </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Petugas</h5>
                  <a href="/petugas" class="btn btn-cyan">Detail</a>
                </div>
              </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Vaksin</h5>
                  <a href="/vaksin" class="btn btn-cyan">Detail</a>
                </div>
              </div>
        </div>
    </div>
@endSection