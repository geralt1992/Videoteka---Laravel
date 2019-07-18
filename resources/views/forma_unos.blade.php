@extends('master.master')


@section('title')
    FORMA ZA UNOS FILMA
@endsection


@section('content')
@include('partials.sidebar')

<style>
 .marin2{
      box-shadow: 5px 0px 10px 5px;
      border-radius: 0.5%;
    }
</style>


    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 bg-light marin2">

            @if(Session::has('success'))
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="message" class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                </div>
            </div>
            @endif


        <h1>Uplodaj svoj film</h1>
            <br>
        <div class="col-md-4">
            <form method="POST" action="{{ route('unos.film') }}" enctype="multipart/form-data">
                    {{csrf_field()}}


                <div class="form-group">
                    <label for="naslov">Naslov</label>
                    <input type="text" class="form-control" id="naslov" name="naslov"
                    aria-describedby="title" placeholder="Unesi naslov">
                </div>

                <div class="form-group">
                    <label for="naslov">Opis</label>
                    <input type="text" class="form-control" id="opis" name="opis"
                    aria-describedby="title" placeholder="Unesi naslov">
                </div>

                <div class="form-group">
                    <label for="zanr">Žanr</label>
                    <br>
                    <select class="browser-default custom-select" name="zanr" id="zanr">
                        <option selected>Klikni kako bi izabrao žanr</option>
                        @if($genres)
                        @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->žanr}}</option>
                        @endforeach
                        @endif
                        </select>
                        <span style="font-size:12px;"><a href="{{route('forma.zanr')}}">Ukoliko nema željenog žanra, unesi novi ovdje!!!</a></span>
                </div>

                <div class="form-group">
                    <label for="godina">Godina izdavanja filma</label>
                    <input type="number" class="form-control" id="godina" name="godina"
                    aria-describedby="title" min="1900" placeholder="Unesi godinu izdavanja filma">
                </div>


                <div class="form-group">
                    <label for="trajanje">Trajanje filma</label>
                    <input type="number" class="form-control" id="trajanje" name="trajanje"
                    aria-describedby="title" placeholder="Unesi trajanje filma u minutama">
                </div>

                <div class="form-group">
                      <label for="cover">Naslovnica filma</label>
                      <input type="file"  name="moviecover" id="cover"/>
                 </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Uplodaj svoj film</button>
                    <button type="reset" class="btn btn-primary">Reset</button>


            </form>
        </div>


        <br>
        <br>
        <br>

<hr>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Popis trenutnih filmova</h1>
                <br>
            </div>


        <div class="panel-body col-md-12">
            <table class="table table*striped task-table">

            <thead>
                <th>Slika</th>
                <th>Naslov</th>
                <th>Opis</th>
                <th>Godina</th>
                <th>Trajanje</th>
                <th>Uplodao</th>
                <th>Uredi</th>
                <th>Obriši</th>
            </head>

            <tbody>
              @if($kljuc)
              @foreach($kljuc as $movie)
                <tr>
                    <td class="table-text">
                        <div><img src="{{url('uploads/' .$movie->filename)}}" alt="$movie->original_filename"></div>
                    </td>

                    <td class="table-text">
                        <div>{{$movie->naslov}}</div>
                    </td>

                    <td class="table-text">
                        <div>{{$movie->opis}}</div>
                    </td>

                    <td class="table-text">
                        <div>{{$movie->godina}}</div>
                    </td>

                    <td class="table-text">
                        <div>{{$movie->trajanje}}</div>
                    </td>

                    <td class="table-text">
                        <div>{{$movie->name}}</div>
                    </td>

                    <td class="table-text">
                        <div><a href="{{route('uredjivanje.filma', ['id' => $movie->id]) }}">Uredi</a></div>
                    </td>

                    <td class="table-text">
                        <div><a href="{{route('brisanje.filma', ['id' => $movie->id]) }}">Obriši</a></div>
                    </td>


                </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>
    </div>
@endsection
