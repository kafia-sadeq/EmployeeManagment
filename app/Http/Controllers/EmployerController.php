<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    //
    public function index(){
        return view('employer.index');
    }
    public  function create(){
        return view('employer.create');
    }
}
