<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testCtrl extends Controller
{
    public function testview (){
        return view ('test');
    }
}
