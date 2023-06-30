<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Open+Sans:wght@300;400&family=Poppins:ital,wght@0,100;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <title>Pengangkutan Sampah</title>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
            <div class="container">
              <a class="navbar-brand" href="#"><span>Pengangkutan</span>Sampah</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              {{-- <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end align-items-center" id="navbarNav">
                <div class="active">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="/sampah">Dashboard</a>
                  </li>
                </ul>
              </div>
            </div> --}}
        </div>
          </nav>
    </header>

    <section class="home" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="heading">Sampah anda kami kelola sesuai regulasi pemerintah.</h1>
                    <p class="subheading text-white">"Hijau dan bersih bukan hanya sebuah aspirasi tetapi sebuah tindakan." - Christine Pelosi

                    </p>
                    <div class="btn-home">
                        <a href="/sampah" class="btn btn-pengaduan py-2 pc-3 px-lg-4 py-lg-3">Dashboard</a>
                    </div>
                </div>

                <div class="col-lg-6 position-relative d-none d-lg-block">
                    <img src="https://www.pastiangkut.id/assets/images/angkut.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>