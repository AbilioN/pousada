<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    function getAll(Request $request)
    {
        $services = Services::all();
        dd($services);
    }

    function getAllJson(Request $request)
    {

        $services = Service::with('subServices')->get();

        return response()->json($services);
        
    }
}
