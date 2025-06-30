<?php

use App\Jobs\DailyProductUpdateLike;
use App\Jobs\MonthlyProductUpdateLike;
use App\Jobs\WeeklyProductUpdateLike;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::job(new DailyProductUpdateLike)->dailyAt('00:00');
Schedule::job(new WeeklyProductUpdateLike)->weeklyOn(1, '00:00');
Schedule::job(new MonthlyProductUpdateLike)->monthlyOn(1, '00:00');