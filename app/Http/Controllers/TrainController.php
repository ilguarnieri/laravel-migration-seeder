<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        $trains = Train::where('date', '2022-04-22')->get();
        return view('homepage', compact('trains'));
    }
}
