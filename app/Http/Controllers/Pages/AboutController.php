<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(Request $request)
    {
        dd($request->getRequestUri());
    }
}
