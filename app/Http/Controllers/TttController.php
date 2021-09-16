<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TttController extends Controller
{
    //
    function tt(Request $request)){
        // $value = $_GET['aaa'];
        $value = $request -> input('aaa');
    
        return view('content',
            [
                'viewValue' => $value
            ]
        );
    }
}
