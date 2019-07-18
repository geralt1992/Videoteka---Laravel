@extends('master.master')


@section('title')
    FORMA ZA UNOS ŽANRA
@endsection


@section('content')
@include('partials.sidebar')


    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h1>Uplodaj svoj žanr</h1>
            <br>
        <div class="col-md-4">
            <form method="POST" action="{{route('unos.zanra')}}">
                    {{csrf_field()}}

                <div class="form-group">
                    <label for="naslov">Žanr</label>
                    <input type="text" class="form-control" id="zanrr" name="zanrr"
                    aria-describedby="title" placeholder="Unesi ime zanra">
                </div>               

                    <button type="submit" class="btn btn-primary">Uplodaj</button>
            </form>
        </div>



    
    </main>






@endsection