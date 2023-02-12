<?php

/*
|--------------------------------------------------------------------------
| Train Info Controller
|--------------------------------------------------------------------------
|
| A controller for the istance Train
|
*/

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainInfoController extends Controller
{
    public function index(){
        $numOfSeenElements = 9;
        $trains = Train::limit($numOfSeenElements)->get();
        return view('home' , compact('trains'));
    }
}