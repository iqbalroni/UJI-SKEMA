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
    
    <!-- navbar -->
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
    <nav class="navbar navbar-expand-lg bg-cyan text-light fixed-top shadow">
      
        <div class="container">
          <a class="navbar-brand" href="#">
            {{-- <img src="{{asset('img-banner')}}/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> --}}
            <b>Y</b>UK<b>S</b>EHAT.
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#penjelasan">Penjelasan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#data">Data Vaksin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak Kami</a>
            </li>
          </ul>
        </div>
        </div>
    </nav>

     <div class="banner">
        <div class="jumbotron d-flex align-items-center">
            <div class="text container">
                <div class="row">
                  <div class="col-sm-9">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('img-banner')}}/alur-periksa-covid-19.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('img-banner')}}/ESjooepUMAMuVj5.jfif" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('img-banner')}}/verifikasi-vaksin-2.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                      <span class="carousel-control" aria-hidden="true"><</span>
                      <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                      <span class="carousel-control" aria-hidden="true">></span>
                      <span class="sr-only">Next</span>
                    </button>
                </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="text-banner">
                      <h3>Berita Terhangat</h3>
                      <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Covid mulai menaik 2022</li>
                          <li class="list-group-item">Jangan Lupa Mematuhi Protokol Kesehatan</li>
                          <li class="list-group-item">Warga Dilarang Berkeluaran Di Lingkungan</li>
                          <li class="list-group-item">Beredar Virus Varian Terbaru</li>
                          <li class="list-group-item">Tetap Jaga Jarak Dan Waspada</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
     </div>

     <div class="penyebaran">
       <div class="jumbotron d-flex align-items-center">
         <div class="container">
          <div class="card ex">
            <div class="row d-flex align-items-center">
              <div class="col-sm-3">
                <div class="card-brt text-center bg-cyan">
                  <h3 class="text-light m-0"><b>4.323.101</b></h3>
                  <h3 class="text-light m-0"><b>SEMBUH</b></h3>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card-brt text-center bg-cyan-2">
                  <h3 class="text-light m-0"><b>4.844.279</b></h3>
                  <h3 class="text-light m-0"><b>POSITIF</b></h3>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card-brt text-center bg-danger">
                  <h3 class="text-light m-0"><b>145.321</b></h3>
                  <h3 class="text-light m-0"><b>MENINGGAL</b></h3>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card-brt text-center bg-warning">
                  <h3 class="text-light m-0"><b>300</b></h3>
                  <h3 class="text-light m-0"><b>DALAM PANTAUAN</b></h3>
                </div>
              </div>
            </div>
          </div>
         </div>
       </div>
     </div>

     <div class="penjelasan" id="penjelasan">
       <div class="jumbotron d-flex align-items-center">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-sm-4">
                <img src="{{asset('img-banner')}}/img.png" class="img-fluid">
              </div>
              <div class="col-sm-8">
                <h3>Apa Itu Virus Covid 19?</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam doloribus impedit commodi provident facilis quisquam, facere minima omnis id atque quas dicta deleniti soluta illo, hic consequuntur fuga dolores beatae, adipisci consequatur rerum. Quisquam molestias cum iusto, sit, repellat hic cumque voluptas, pariatur natus magnam fuga? Earum ullam velit facere, voluptatibus vel voluptatum alias corrupti sint quod ratione pariatur commodi!</p>
                <button class="btn btn-cyan-2">Selengkapnya</button>
              </div>
            </div>
          </div>
       </div>
     </div>

     <div class="data-vaksin" id="data">
       <div class="jumbotron d-flex align-items-center">
         <div class="container">
          <h3>Data Warga Yang Sudah Di Vaksin</h3>
          <p>Dibawah Ini Adalah Beberapa Data Warga Yang Sudah Vaksin</p><br>
          <div class="row row-cols-3">
          @foreach ($all as $row)
            <div class="col mb-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$row->nama_warga}}</h5>
                  <p class="card-text">Bahwa {{$row->nama_warga}} Sudah Divaksin ke {{$row->periode}}</p>
                  <button class="btn btn-cyan-2">Detail Vaksin</button>
                </div>
              </div>
           </div>
          @endforeach
          </div>
         </div>
       </div>
     </div>

     <div class="contact" id="kontak">
       <div class="jumbotron d-flex align-items-center">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-sm-6 text-center">
              <img src="{{asset('img-banner')}}/5188826.png" class="img-fluid">
            </div>
            <div class="col-sm-6 text-left">
              <form>
                <h3 class="txt-cyan"><b>Kontak Kami Disini</b></h3>
                <p>Jika ada data salah dan ingin menanyakan apa silahkan di bawah</p>
                <hr>
                <div class="row">
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pesan</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-cyan-2">Kirim Pesan</button>
              </form>
            </div>
          </div>
          
        </div>
       </div>
     </div>

     <footer class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md text-left d-flex align-items-center">
            <img src="{{asset('img-banner')}}/logo.png" width="100px" height="100px">
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-light" href="#">Cool stuff</a></li>
              <li><a class="text-light" href="#">Random feature</a></li>
              <li><a class="text-light" href="#">Team feature</a></li>
              <li><a class="text-light" href="#">Stuff for developers</a></li>
              <li><a class="text-light" href="#">Another one</a></li>
              <li><a class="text-light" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-light" href="#">Resource</a></li>
              <li><a class="text-light" href="#">Resource name</a></li>
              <li><a class="text-light" href="#">Another resource</a></li>
              <li><a class="text-light" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-light" href="#">Business</a></li>
              <li><a class="text-light" href="#">Education</a></li>
              <li><a class="text-light" href="#">Government</a></li>
              <li><a class="text-light" href="#">Gaming</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-light" href="#">Team</a></li>
              <li><a class="text-light" href="#">Locations</a></li>
              <li><a class="text-light" href="#">Privacy</a></li>
              <li><a class="text-light" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright">
      <p>&copy; YUKSEHAT</p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>