<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');*/

use App\Models\Task;
use Illuminate\Support\Facades\Schedule;

Schedule::call(function () {
    Task::where('due_date', '<', now())
        ->where('status', 'Pending')
        ->update(['status' => 'Overdue']);
})->everyMinute();
