<?php
<<<<<<< HEAD

use App\Models\BusinessSetting;
use Illuminate\Support\Facades\Cache;

=======
use App\Models\BusinessSetting;
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
if (!function_exists('businessSetting')) {
    function businessSetting($id = 1)
    {
        return Cache::remember('business-setting', 86400, function () use ($id) {
            return BusinessSetting::find($id);
        });
    }
}
<<<<<<< HEAD

if (!function_exists('format_price')) {
    function format_price($amount = 0.00)
    {
        return '₹' . number_format($amount, 2);
    }
}
=======
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
