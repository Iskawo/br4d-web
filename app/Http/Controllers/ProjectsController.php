<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() { return view('projects.index'); }

    public function veidus() { return view('projects.veidus'); }

    public function canary() { return view('projects.canary'); }
}
