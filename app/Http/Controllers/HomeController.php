<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //
    public function test()
    {
        Log::debug("Minjana");
    }
}
