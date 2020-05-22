@extends('layouts.app')

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
    @endif
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center><div class="card-header">Your account</div></center>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <hr>
                    </div>
                    <main>
                        <h5>Account settings</h5>
                        <br/>
                        <form action="{{route('update',Auth::user()->id)}}" method="POST">
                            {{ csrf_field() }}

                                <h5>Your Name:</h5>
                                <h5>{{ Auth::user()->name }}</h5>
                                 <input class="form-control" type="text" value="{{ Auth::user()->name }}" placeholder="name" name="name">

                                <h5>Your email:</h5>
                                <h5>{{ Auth::user()->email }}</h5>
                                <input class="form-control" type="text" value="{{ Auth::user()->email }}" placeholder="email" name="email">
                            <button type="submit" class="btn btn-primary">Update data</button>
                            </form>
                    </main>
                    <style>
                        h5{
                            text-align: center;
                        }
                        h6{
                            margin: 15px;
                        }
                        video{
                            display: flex;
                            justify-content: center;
                        }
                        .audi{
                            display: inline-block;
                            margin: 15px;
                        }
                    </style>
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

                </div>
            </div>
        </div>
    </div>

@endsection
