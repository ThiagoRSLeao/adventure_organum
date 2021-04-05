<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\System;

class AdventureController extends Controller
{
    public function getSystemStandard(){
        $system = System::find(1);
        return response()->json(['system' => $system]);
    }
}
