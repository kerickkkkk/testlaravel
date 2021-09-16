<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function pb()
    {
        $level = 11;
        $version = $_GET['version'];


        return view('page2',[
            'version' => $version,
            'level' => $level
        ]);
    }
}
