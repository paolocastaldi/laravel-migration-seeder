<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dbRequest(){
        $trains = Train::all();

        
        $data = [
            'trains' => $trains
        ];
        return view('welcome', $data);
    }
}