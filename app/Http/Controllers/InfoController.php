<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
      return view('info', ['user' => Auth::user()]);
    }
  }
