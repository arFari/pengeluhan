<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Pengaduan Masyarakat</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffb380;">
      <!-- <div class="container"> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Search</a>
            <a class="nav-item nav-link" href="#">Feedback</a>
            <a class="nav-item nav-link" href="#">About</a>
          </div>
        </div>
        <a class="navbar-brand ml-auto" href="/loginpage">
          Ngadu!
        </a>
      <!-- </div> -->
    </nav>
    
    <div class="container mt-5">
      <div class="card">
        <div class="card-body">
        <form action="/submit" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label>NIK</label>
            <input type="text" class="form-control" name="nik">
          </div>
          <div class="form-group">
            <label>Jenis Pengaduan</label>
            <select class="form-control" name="jenis">
              <option value="">-Pilih-</option>
              <option value="Kebersihan">Kebersihan</option>
              <option value="Keamanan">Keamanan</option>
              <option value="Sarana Prasarana">Sarana Prasarana</option>
            </select>
          </div>
          <div class="form-group">
            <label>Keluhan</label>
            <textarea class="form-control" name="keluhan" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label>Lokasi</label>
            <input type="text" class="form-control" name="lokasi">
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-md" style="background-color: #ffb380;">Adukan</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>