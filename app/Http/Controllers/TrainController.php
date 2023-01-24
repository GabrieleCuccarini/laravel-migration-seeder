<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function fetch() {
        $trains = Train::all();
        dump($trains);
        return view('homepage', [
            'trains' => $trains
        ]);
    }
}
