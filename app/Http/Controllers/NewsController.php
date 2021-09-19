<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function final(){
        $data = [
            'content' => '本文'
        ];
        return view('layouts.layout',$data);
    }
}
