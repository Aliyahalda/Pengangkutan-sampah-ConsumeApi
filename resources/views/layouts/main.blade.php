<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sampah | @yield ('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<style>
    .main {
        height: 100vh;
    }

    .btn-purple{
        background: #567189;
        border: 1px solid #8CA6DB;
        color: #fff;
        width: 100%;
    }

    .btn-purple:hover{
        background: #8CA6DB;
        color: #fff;
    }

    .sidebar a{
        text-decoration: none;
        padding: 20px 30px;
        color: black;
        display: block;
    }

    .sidebar a:hover{
        background-color: #99A98F;
        /* width: 213px;
        margin-left: -25px; */
    }

    .sidebar a.active{
        background-color:#C1D0B5;
        border-right: solid 4px #ca9892;
        /* width: 213px;
        margin-left: -25px; */
    }

    .navbar{
        background: #609966;

    }

    
    .sidebar{
        background: #9DC08B ;
    }

    .navbar-brand{
        margin-left: 5px;
    }

    /* .books{       
         background-color: #579BB1;  

    }

    .cate{
        background-color: #7B8FA1;
    }

    .user{
    background-color: #567189;

    } */
</style>
<body>

    <div class="main d-flex flex-column justify-content-between">
    <!--navbar-->
     <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="https://1.bp.blogspot.com/-8a1g0bI6nNc/V9L9ghwMXmI/AAAAAAAAA2U/gex3TIQ8OWoT6JAeVxIeFsB60QSp7_vSACLcB/s1600/pengangkuts.png" alt="" srcset="" height="30px">                  
            <div class="navbar-brand"><b> Pengangkutan Sampah</b></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
      </nav>

      <div class="body-main h-100">
        <div class="row g-0 h-100">
            <div class="col-lg-2  sidebar collapse d-lg-block" id="navbarSupportedContent">
                <div class="active">
 
                <a href="/sampah" @if (request()->route()->uri == 'sampah') class='active' @endif>
                    <i class="bi bi-clipboard-data-fill"></i>                    <b>Data Sampah</b>
                    </i>
                </a>
                <a href="/sampah/create" @if (request()->route()->uri == 'sampah/create') |  class='active' @endif>
                    <img src="https://1.bp.blogspot.com/-8a1g0bI6nNc/V9L9ghwMXmI/AAAAAAAAA2U/gex3TIQ8OWoT6JAeVxIeFsB60QSp7_vSACLcB/s1600/pengangkuts.png" alt="" srcset="" height="20px">                  
                    <b> Sampah</b>
                </a>
                
                <a href="/sampah/trash/all" @if (request()->route()->uri == 'sampah/trash/all') class='active' @endif>
                    <i class="bi bi-recycle"></i>
                <b> Trashed</b>
                </i></a>
    

            </div>
            </div>
            <div class="col-lg-10 p-5">
                    @yield('content')
            </div>
        </div>
      </div>
</div>
   


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
</body>
</html>