<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JunController extends Controller
{
  function index()
  {

    return view('index');
  }
}
