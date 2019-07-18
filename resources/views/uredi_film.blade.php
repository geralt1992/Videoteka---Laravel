@extends('master.master')


@section('title')
    UREDJIVANJE FILMA
@endsection


@section('content')
@include('partials.sidebar')


    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h1>Uredi film</h1>
            <br>
        <div class="col-md-4">
            <form method="POST" action="{{ route('uredi', ['id' => $id]) }}">
                    {{csrf_field()}}


                <div class="form-group">
                    <label for="naslov">Naslov</label>
                    <input type="text" class="form-control" id="naslov" name="naslov"
                    aria-describedby="title" placeholder="Unesi naslov">
                </div>

                <div class="form-group">
                    <label for="naslov">Opis filma</label>
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
                

                    <button type="submit" class="btn btn-primary">Uplodaj svoj film</button>
                    <button type="reset" class="btn btn-primary">Reset</button>

                   
            </form>
        </div>
    </main>
@endsection