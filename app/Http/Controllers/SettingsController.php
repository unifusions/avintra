<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('setting.index');
    }

    public function store(Request $request)
{
    $rules = Settings::getValidationRules();
    $data = $this->validate($request, $rules);

    $validSettings = array_keys($rules);

    foreach ($data as $key => $val) {
        if (in_array($key, $validSettings)) {
            Settings::add($key, $val, Settings::getDataType($key));
        }
    }

    return redirect()->back()->with('status', 'Settings has been saved.');
}

}
