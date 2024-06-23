<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\BusinessSetting;
use App\Http\Controllers\Controller;

class BusinessSettingsController extends Controller
{
    public function index()
    {
        $businessSettings = BusinessSetting::all();
        return view('backend.business-settings.index', compact('businessSettings'));
    }

    public function edit($id)
    {
        $businessSetting = BusinessSetting::findOrFail($id);
        return view('backend.business-settings.edit', compact('businessSetting'));
    }

    public function update(Request $request, $id)
    {
        $businessSetting = BusinessSetting::findOrFail($id);
        $businessSetting->update($request->all());

        return redirect()->route('business-settings.index')
                         ->with('success', 'Business settings updated successfully.');
    }
}
