<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageSettingsController extends Controller
{
   public function edit () {
    return view('setting.index');
   }
}
