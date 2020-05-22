<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<style>
    html,
    body,
    header,
    .carousel{
        height: 75vh;
    }
    @media (max-width: 740px){
        html,
        body,
        header,
        .carousel{
            height: 100vh;
        }
        @media (min-width: 800px) and (max-width: 850px){
            html,
            body,
            header,
            .carousel{
                height: 100vh;
            }
        }
    }
</style>

<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
        <a href="#" class="navbar-brand waves-effect">
            <strong class="blue-text">KINO.KZ</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbar-content" aria-controls="navbarContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="#" class="nav-link waves-effect">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link waves-effect">Contact</a>
                </li>
            </ul>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="#" class="nav-link waves-effect">
                        <span class="badge blue z-depth-1 mr-1">15</span>
                        <i class="fab fa-movie-cart"></i>
                        <span class="clearfix d-none d-sm-inline-block">Cart</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link waves-effect">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link waves-effect">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link border border-light rounded waves-effect">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="carousel-ex" class="carousel slide carousel-fade pt-4" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel-ex" data-slide-to="0"></li>
        <li data-target="#carousel-ex" data-slide-to="1"></li>
        <li data-target="#carousel-ex" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view" style="background-image: url('https://images.squarespace-cdn.com/content/v1/54ff0211e4b0331c7906899c/1564538426018-8RPIBUT2MYKHLD5VGRW5/ke17ZwdGBToddI8pDm48kCXxNpazH8uiaDkYRe8PU7oUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKcIKtXe3GuUEY1vf9CjRYYaQs07TNx5WJJFjCtd8t2A-bnGc76rcHbrClvntND0NE3/movies-like-inception-fight-club-brad-pitt-edward-norton-talking.jpg?format=750w ');
          background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4"><strong>Moviessssssss</strong></h1>

                        <p><strong>Movie for everyone</strong></p>

                        <p class="mb-4 d-none d-md-block"><strong>Action films, new films </strong></p>
                        <a href="#" class="btn btn-outline-white btn-lg">Link to nowhere
                            <i class="fab fa-graduation"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="carousel-item">
            <div class="view" style="background-image: url('https://images.squarespace-cdn.com/content/v1/54ff0211e4b0331c7906899c/1564538111146-3HLUZWB8E7H2IDJO5QHG/ke17ZwdGBToddI8pDm48kJR_iTUFDhWJo9LY764seep7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UV9HoQ4qK_ZoX51YVx6j94BrRoNrfOJUntAIpnav3wRviyYOGnikgnVaNNu0qxk8rw/movies-like-inception-the-matrix-neo-bullets.jpg?format=750w');
          background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4"><strong>Moviessssssss</strong></h1>

                        <p><strong>Movie for everyone</strong></p>

                        <p class="mb-4 d-none d-md-block"><strong>Action films, new films </strong></p>
                        <a href="#" class="btn btn-outline-white btn-lg">Link to nowhere
                            <i class="fab fa-graduation"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="carousel-item">
            <div class="view" style="background-image: url('https://images.squarespace-cdn.com/content/v1/54ff0211e4b0331c7906899c/1564539492629-IG3Y2E0WV3RBR4RSXLJ6/ke17ZwdGBToddI8pDm48kCCaKpClLXofcTEWIb93n6MUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKcWWOf7ao_5O0v6l-xpcd2w8cCaQmst1XCUI6g4loesbcyF9ZGO7swjQGkPwddV2FE/movies-like-inception-shutter-island-leonardo-dicaprio.jpg?format=750w');
          background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4"><strong>Moviessssssss</strong></h1>

                        <p><strong>Movie for everyone</strong></p>

                        <p class="mb-4 d-none d-md-block"><strong>Action films, new films </strong></p>
                        <a href="#" class="btn btn-outline-white btn-lg">Link to nowhere
                            <i class="fa fa-graduation"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <a href="#carousel-ex" class="carousel-control-prev"
       role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a href="#carousel-ex" class="carousel-control-next"
       role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>

<main>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">
            <span class="navbar-brand">Categories:</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#nextNav" aria-controls="nextNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nextNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">All</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Serials</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">TV shows</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Trailers</a>
                    </li>
                </ul>

                <form class="form-inline">
                    <div class="md-form my-0">
                        <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </nav>
        <section class="text-center mb-4">
            <div class="row wow fadeIn">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="https://img-fotki.yandex.ru/get/54004/39219794.13/0_17da10_39ae73ce_XL" alt="Fury">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Movie</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Fury
                                        <span class="badge badge-pill danger-color">New</span></a>
                                </strong>
                            </h5>
                            <h5 class="font-weight-bold blue-text"><strong>Action</strong></h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQfzc4ujeFlwHYfHG26jKesxDhJiruWu-FIc7NgjhZL96DN3fyX&usqp=CAU" alt="Lord of the rings">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Movie</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Lord of the rings
                                        <span class="badge badge-pill danger-color">New</span></a>
                                </strong>
                            </h5>
                            <h5 class="font-weight-bold blue-text"><strong>Adventure</strong></h5>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="https://xage.ru/media/uploads/2008/2/posteryi-luchshih-filmov-poluchivshih-oskar/posteryi-luchshih-filmov-poluchivshih-oskar_3.jpg" alt="A beautiful mind">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Movie</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">A beautiful mind
                                        <span class="badge badge-pill danger-color">New</span></a>
                                </strong>
                            </h5>
                            <h5 class="font-weight-bold blue-text"><strong>Drama</strong></h5>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="https://xage.ru/media/uploads/2008/2/posteryi-luchshih-filmov-poluchivshih-oskar/posteryi-luchshih-filmov-poluchivshih-oskar_2.jpg" alt="Chicago">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Movie</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Chicago
                                        <span class="badge badge-pill danger-color">New</span></a>
                                </strong>
                            </h5>
                            <h5 class="font-weight-bold blue-text"><strong>Comedy</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeIn">


                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://kino-teatr.ua/public/main/films/poster_5961.jpg" alt="Avatar">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Movie</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Avatar
                                        <span class="badge badge-pill danger-color">New</span></a>
                                </strong>
                            </h5>
                            <h5 class="font-weight-bold blue-text"><strong>Fantasy</strong></h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://24tv.ua/resources/photos/news/620_DIR/201912/1254818_10507591.jpg?201912090626" alt="Avangers">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Movie</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Avangers
                                        <span class="badge badge-pill danger-color">New</span></a>
                                </strong>
                            </h5>
                            <h5 class="font-weight-bold blue-text"><strong>Superhero</strong></h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR35Co0nIoYVzsfhOS65OfIi9NSJgtYVmJhzk6qF0QciNU7kXCJ&usqp=CAU" alt="Logan">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Movie</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Logan
                                        <span class="badge badge-pill danger-color">New</span></a>
                                </strong>
                            </h5>
                            <h5 class="font-weight-bold blue-text"><strong>Drama</strong></h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ2Gna8cPZyUzxkxwda-OQXrHxgK0ofC8btf0sJ69INifhI3BDv&usqp=CAU" alt="The invisible man">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Movie</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Invisible
                                        <span class="badge badge-pill danger-color">New</span></a>
                                </strong>
                            </h5>
                            <h5 class="font-weight-bold blue-text"><strong>Horror</strong></h5>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <nav class="d-flex justify-content-center wow fadeIn">
            <ul class="pagination pg-blue">
                <li class="page-item">
                    <a href="" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a href="" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">1</span>
                    </a>
                </li>
                <li class="page-item">
                    <a href="" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">2</span>
                    </a>
                </li>
                <li class="page-item">
                    <a href="" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">3</span>
                    </a>
                </li>
                <li class="page-item">
                    <a href="" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">4</span>
                    </a>
                </li>
                <li class="page-item">
                    <a href="" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">5</span>
                    </a>
                </li>
                <li class="page-item">
                    <a href="" class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</main>

<footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <div class="pt-4">
        <a href="#" role="button" class="btn btn-outline-white waves-effect ">bb
        </a>
        <a href="#" role="button" class="btn btn-outline-white waves-effect">aa
        </a>
    </div>
    <hr class="my-4">
    <div class="pb-4">
        <a href="" class="waves-effect">
            <i class="fab fa-facebook mr-3"></i>
        </a>
        <a href="" class="waves-effect">
            <i class="fab fa-twitter mr-3"></i>
        </a>
        <a href="" class="waves-effect">
            <i class="fab fa-instagram mr-3"></i>
        </a>
        <a href="" class="waves-effect">
            <i class="fab fa-github mr-3"></i>
        </a>
        <a href="" class="waves-effect">
            <i class="fab fa-youtube mr-3"></i>
        </a>
        <a href="" class="waves-effect">
            <i class="fab fa-google mr-3"></i>
        </a>
        <a href="" class="waves-effect">
            <i class="fab fa-pinterest   mr-3"></i>
        </a>
    </div>
    <div class="footer-copyright py-3">
        MOVIES FOR EVERYONE
    </div>
</footer>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript"></script>

</body>


</html>
