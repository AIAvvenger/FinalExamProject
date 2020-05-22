@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
    <div class="container">
   <h3>{{ $filmInfo->filmName }}</h3>
   <br/>
   <br/>
   <center><video loop preload="metadata" controls width="1000" src="{{ $filmInfo->trailer }}"></video></center>
   <br/>
   <br/>
   <div align="center">
       <h3>Soundtracks</h3>
       <br/>
       <br/>

        @foreach($filmInfo->sounds  as $music)
            <div class="audi">
                <h4>{{ $music->soundName }}</h4>
       <audio src="{{ $music->music }}" controls></audio>
            </div>
             @endforeach
   </div>
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
<style>
    h3{
        text-align: center;
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
@endsection
