<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function main()
    {
        return view('admin.main');
    }

    public function competency()
    {
        return view('admin.competencies');
    }

    public function certificate()
    {
        return view('admin.certificates');
    }

    public function portfolio()
    {
        return view('admin.portfolios');
    }

    public function greeting()
    {
        return view('admin.greetings');
    }

    public function feedback()
    {
        return view('admin.feedbacks');
    }

    public function calculator()
    {
        return view('admin.calculator');
    }

    public function reference()
    {
        return view('admin.references');
    }

    public function project()
    {
        return view('admin.projects');
    }
}
