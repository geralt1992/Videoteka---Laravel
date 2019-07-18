@extends('master.master')

@section('title')PRETRAŽIVANJE PO ABECEDI @endsection

@section('content')
@include('partials.sidebar')


<main style="text-align: center;" role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">

<h1>Odabrani film -
@foreach ($odabir as $item)
    {{$item->naslov}}
@endforeach
</h1>
<br>


<div class="container">

    <div class="row">
    <div class="panel-body col-md-12">
            <table class="table table*striped task-table">

            <thead>
                <th>Slika</th>
                <th>Naslov</th>
                <th>Opis</th>
                <th>Godina</th>
                <th>Trajanje</th>
                <th>Uredi</th>
                <th>Obriši</th>
            </head>

            <tbody>
              @if($odabir)
              @foreach($odabir as $movie)
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








</main>
@endsection

