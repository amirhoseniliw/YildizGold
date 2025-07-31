<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanel extends Controller
{
   public function index () {
    return view('panel.index_panel');
   }
    public function orders () {
    return view('panel.maneger_orders');
   }
     public function products () {
    return view('panel.maneger_products');
   }
     public function users () {
    return view('panel.maneger_users');
   }
}

