<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Album example · Bootstrap</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <style>
        .bt{
            background-color: rgba(0,0,0,0.5);
        }
        .color1{
            background-color: rgba(0,0,0,0.5);
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
</head>
<body>
<header style="position: fixed;width:100%;z-index: 100;">

    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Album</strong>
            </a>
            <button class="navbar-toggler" type="button" >
                <a href="#n1"><span class="navbar-toggler-icon"></span></a>
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary bt" data-toggle="modal" data-target="#exampleModal">
                Корзина
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Корзина заказов</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            </div>
        </div>
    </div>
</header>

<main role="main" id="n1">

    <section class="jumbotron text-center">

        <div class="container">
            <h1>Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @foreach($arr as $a)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img style='width: 350px;height:400px;' src="{{$a}}" alt="">
                          <div class="card-body">
                            
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
        </div>
    </div>
    <div style="background-color: rgba(0,0,0,0.5);width100%;"><div style="margin:40%;margin-top:-10px;margin-bottom:0px;">
        <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-border text-secondary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-border text-success" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-border text-danger" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-border text-warning" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-border text-info" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-border text-light" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-border text-dark" role="status">
        <span class="sr-only">Loading...</span>
    </div>
        </div></div>
</main>
<div id="carouselExampleControls" class="carousel slide color1"  data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://bigpicture.ru/wp-content/uploads/2010/01/426.jpg" style='width:1000px;height:700px;margin:20%;margin-top:0px;margin-bottom:0px;' alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://img2.okidoker.com/c/6/6/1/561323/6791803/14516987_2.jpg" style='width:1000px;height:700px;margin:20%;margin-top:0px;margin-bottom:0px;' alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://75.img.avito.st/640x480/8166244275.jpg" style='width:1000px;height:700px;margin:20%;margin-top:0px;margin-bottom:0px;' alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Породы
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="https://koteiki.com/wp-content/uploads/2018/01/sfinks.jpg">Донские</a>
        <a class="dropdown-item" href="https://lh3.googleusercontent.com/proxy/j_7i-W7umfTD9LnwDDg_W0Muxnxf5_t8GeD8euKJJDU8V9JBKNc5UP4PMU8YYEwDs4DoLXMwHCbZNoxxlQ1ncTwW2kRtdmRSNZVnweaUtkVjPVbD8VqOxP1o0vPa9EHnr9qU3Nba3pG2xbiVjcyFUmN17Z0Up0DG">Канадские</a>
        <a class="dropdown-item" href="https://lh6.googleusercontent.com/y9o8a9Qor-DllbXAEzLBgJ50GIyFoukRMZupZfvgCaicPEpMSyN-k_owtlhETTrBhET4JpIw6HEwRj86H0LDnvotlHcOFfFzrqKrEs-ZeMMo7WirMOYgDwJvMgxek5QXJLioGtdg">Петерболды</a>
    </div>
</div>
<form style="margin:5%;">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.4/getting-started/introduction/">getting started guide</a>.</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body></html>
