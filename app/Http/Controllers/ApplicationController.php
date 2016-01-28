<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{

    public function index()
    {
        return view('pages.application.create');
    }

    public function show()
    {
        return view('');
    }

    public function store(ApplicationRequest $request)
    {
        
    }
}
