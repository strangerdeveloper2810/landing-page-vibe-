<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ViewContract;

class HomeController extends Controller
{
    public function __invoke(): ViewContract
    {
        return view('welcome');
    }
}


