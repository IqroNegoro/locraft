<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DailyProductUpdateLike implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $yesterday = \Carbon\Carbon::yesterday();
    
            Product::whereDate('created_at', $yesterday)
            ->update(['total_likes' => DB::raw('likes')]);
        } catch (\Throwable $e) {
            throw $e;
        }
    }
    
    public function failed(\Throwable $e) {
        Log::error('Failed to update product like daily', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
            'code' => $e->getCode(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
        ]);
    }
}
