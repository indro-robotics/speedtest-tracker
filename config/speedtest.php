<?php

use Carbon\Carbon;

return [
    /**
     * Build information
     */
    'build_date' => Carbon::parse('2024-03-03'),

    'build_version' => 'v0.18.2',

    /**
     * General
     */
    'content_width' => env('CONTENT_WIDTH', '7xl'),

    /**
     * Polling
     */
    'dashboard_polling' => env('DASHBOARD_POLLING', '60s'),

    'notification_polling' => env('NOTIFICATION_POLLING', '60s'),

    'results_polling' => env('RESULTS_POLLING', null),
];
