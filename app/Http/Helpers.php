<?php
use App\Models\BusinessSetting;
if (!function_exists('businessSetting')) {
    function businessSetting($id = 1)
    {
        return Cache::remember('business-setting', 86400, function () use ($id) {
            return BusinessSetting::find($id);
        });
    }
}
