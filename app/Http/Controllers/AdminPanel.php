<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanel extends Controller
{
   public function index () {
    return view('panel.index_panel');
   }
}
