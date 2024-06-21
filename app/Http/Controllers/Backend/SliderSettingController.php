<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Models\SliderSetting;
use App\Models\BusinessSetting;
use App\Http\Controllers\Controller;

class SliderSettingController extends Controller
{
     public function index()
    {
        $sliderSettings = SliderSetting::all();
        return view('backend.slider-settings.index', compact('sliderSettings'));
    }
}
