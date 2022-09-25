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
    
    <div class="login">
        <div class="jumbotron d-flex align-items-center bg-cyan">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-6">
                        <img class="img-fluid" src="{{asset('img-banner')}}/5188826.png">
                    </div>
                    <div class="col-sm-6">
                        <form class="form-signin" method="POST" action="/confirmAuth">
                        @csrf
                            
                            <h1 class="h2">LOGIN PETUGAS</h1>
                            <input type="text" name="username"  id="inputEmail" class="form-control" placeholder="Username" required autofocus>
                            <input type="password"  name="password" id="inputPassword" class="form-control mt-3" placeholder="Password" required>
                            <button class="btn btn-lg btn-cyan-2 btn-block mt-3" type="submit">Login</button>
                            <p class="mt-5 mb-3 text-light">&copy; YUKSEHAT</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
