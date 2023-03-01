<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function index()
    {
        return (\view('references.index'));
    }
}
