<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;

class HomeControll extends Controller
{
    //non riesco a fare il filtro
    public function index(){
        $dati = Train::all();
        // $datiFiltrati = Train::all()->where('oraio_di_partenza','like','14%');
        $datiFiltrati = Train::all()->where('data_di_partenza','>',now()->toDateString());
        // oraio_di_partenza
        return view('home',['trains'=>$datiFiltrati]);
    }
}
