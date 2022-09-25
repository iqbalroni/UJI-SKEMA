
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="informasi fixed-top">
      <div class="container d-flex justify-content-between">
        <p>@IqbalRonii</p>
        <div class="text-right d-flex justify-content-around">
          <marquee class="mr-4">Ciee Yang Copas</marquee>
          <p class="mr-4">+08123456789</p>
          <p>@Youtubenya_ini</p>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-cyan fixed-top">
        <a class="navbar-brand" href="#">YUKSEHAT.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link-active" data-toggle="modal" data-target="#staticBackdrop" style="cursor: pointer">{{session('nama')}}</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container-fluid mt-4">
      <div class="row">
        @include('layout.sidebar')
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-3">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-5">
            <div class="container">
              @if(session('pesan'))
              <div class="alert alert-primary" role="alert">
                {{session('pesan')}}
              </div>
              @endif
              <div class="card shadow rounded">
                <div class="card-body">
                  @yield('konten')
                </div>
              </div>

            </div>
          </div>
        </main>
      </div>
    </div>

     <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Perhatian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah {{session('nama')}} Ingin Logout Dari Halaman Admin ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="/logout" type="button" class="btn btn-cyan">Logout</a>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>
