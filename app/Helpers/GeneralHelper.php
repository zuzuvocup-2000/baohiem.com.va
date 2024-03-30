<?php

use Carbon\Carbon;

if (!function_exists('convertTimeRange')) {
    function convertTimeRange($time_range)
    {
        [$from, $to] = explode('-', $time_range);

        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];

        return $time;
    }
}

