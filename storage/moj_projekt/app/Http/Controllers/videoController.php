<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\genre;
use App\movie;

use Illuminate\Support\Facades\DB;
class videoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    //prikaz forme za unos filma  +++ prikaz svih filmova iz baze
    public function prikaz(){
        $genres = genre::get();
        $movies = movie::get();
        return view('forma_unos', ['genres' => $genres, "kljuc" => $movies]);
    }


    //unos novog zanra
    public function unos_filma(Request $request){

        $cover = $request->file('moviecover');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename(). "." . $extension, File::get($cover));

        $movies = new movie;
        $movies->naslov = $request->naslov;
        $movies->id_zanra = $request->zanr;
        $movies->godina = $request->godina;
        $movies->trajanje = $request->trajanje;

        $movies->opis = $request->opis;

        $movies->mime = $cover->getClientMimeType();
        $movies->original_filename= $cover->getClientOriginalName();
        $movies->filename = $cover->getFilename() . "." . $extension;

        $movies->save();
        return redirect()->route('forma.film');

    }

     //prikaz forme za unos zanra
    public function prikaz_forme_zanr(){
        return view('forma_dodaj_zanr');
    }

     //unos novog filma
    public function unos_zanra(Request $request){
        $genre = new genre;
        $genre->žanr = $request->zanrr;
        $genre->save();
        return redirect()->route('forma.film');
    }

    //brisanje filma
    public function brisanje($id){
        $movie = movie::find($id);
        $movie->delete();
        return redirect()->route('forma.film');
    }

    //uredjivanje filma - forma
    public function uredjivanje($id){
        $genres =  genre::get();
        return view('uredi_film' , ["genres" => $genres, "id" => $id]);

    }

    //uredjivanje filma
    public function uredi(Request $request, $id){
        $movie = movie::find($id);
        $movie->naslov = $request->naslov;
        $movie->id_zanra = $request->zanr;
        $movie->godina = $request->godina;
        $movie->trajanje = $request->trajanje;

        $movie->opis = $request->opis;

        $movie->save();
        return redirect()->route('forma.film');

    }



    //prikaz pretrazivanja po abecedi
    public function prikaz_pretrazivanja(){
        $slova = range("A", "Z");
        return view('pretrazivanje_po_abeced' , ["kljuc2" => $slova]);
    }


    public function upit($slovo){
        $upit = DB::table('movies')->where('naslov' , 'like' , "$slovo%")->get();
        $slova = range("A", "Z");
        return view('odabrano_slovo' , ['kljuc' => $upit , "kljuc2" => $slova]);
    }

    

}//kraj klase
