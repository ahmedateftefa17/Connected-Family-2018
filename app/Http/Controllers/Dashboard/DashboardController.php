<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class DashboardController extends Controller
{

  public function show(){
    return view('dashboard.home')->with([
      
    ]);
  }

  //

}
