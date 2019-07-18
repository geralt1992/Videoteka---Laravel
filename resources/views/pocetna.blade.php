@extends('master.master')


@section('title')
   POCETNA STRANICA
@endsection


@section('content')




    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .jumbotron{
        background-image:  url({{url("/uploads/kino1.jpg")}});
        background-position: center;
        background-attachment:fixed;
        background-repeat: no-repeat;
        height:450px;

      }

      .display-1{
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        position: relative;
        left: 5.1em;
        bottom: 0.4em;
        font-family: Georgia, 'Times New Roman', Times, serif;
        box-shadow: 0px 0px 15px 0px;
        transition: transform 2s;
        letter-spacing: 8px;
        opacity: 0.7;
        color: black;
      }

      .display-1:hover{
        transform: scale(1.4);
        opacity: 1.0;
      }

      .love{
        display: inline-block;
        position: relative;
        left: 35em;
        transition: transform 1.5s;
      }

      .love:hover{
        transform: scale(1.2);
      }

      .respo{
        transition: transform 1.5s;
      }

      .respo:hover{

        transform: scale(1.1);
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>


      <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">


  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="navbar-brand" href="{{route('pocetna')}}  ">Videoteka</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
      </li>
    </ul>
  </div>

  @if(Auth::user())
  <p class="naslov">Dobrodošli {{Auth::user()->name}} </p>
  @endif



  <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle"  id="dropdown09" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">User Account</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    @guest
                    <a class="dropdown-item" href="{{ route('register') }}">Sign up</a>
                    <a class="dropdown-item" href="{{ route('login') }}">Sign in</a>
                    @else
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
            </li>
        </ul>
    </div>
</nav>




<main role="main">

  <div class="jumbotron">
    <div class="container">
    <a href="{{route('forma.film')}}"><h1 class="display-1">VIDEOTEKA</h1></a>

      <p><a class="btn btn-primary btn-lg love" href="{{route('forma.film')}}" role="button">Unesi svoj film &raquo;</a></p>
    </div>
  </div>



  <div class="container">

    <div class="row">
       @if($kljuc)
       @foreach($kljuc as $movie)
      <div class="col-md-4">
        <h2>{{$movie->naslov}}</h2>
        <div class="respo"><a href="{{route('odabir' , ['kljuc' => $movie->naslov])}}"> <img src="{{url('uploads/' .$movie->filename)}}" alt="$movie->original_filename"></a></div>
        <br>
        <a class="btn btn-primary" href="{{route('odabir' , ['kljuc' => $movie->naslov])}}" role="button">Više o filmu &raquo;</a></p>
        <br>
        <br>
    </div>

      @endforeach
      @endif
      <br>
      <nav class="blog-pagination">
        {{$kljuc -> links()}}
     </nav>

    </div>

    <hr>

  </div>

</main>

<footer class="container">
<p>&copy; Marin Sabljo 2019</p>
</footer>
</html>

@endsection
