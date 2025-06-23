<?php

namespace App\Observers;

use App\Models\Follow;

class FollowObserver
{
    /**
     * Handle the Follow "created" event.
     */
    public function created(Follow $follow): void
    {
        $follow->user()->increment('following');
        $follow->followed()->increment('followers');
    }

    /**
     * Handle the Follow "updated" event.
     */
    public function updated(Follow $follow): void
    {
        //
    }

    /**
     * Handle the Follow "deleted" event.
     */
    public function deleted(Follow $follow): void
    {
        $follow->user()->decrement('following');
        $follow->followed()->decrement('followers');
    }

    /**
     * Handle the Follow "restored" event.
     */
    public function restored(Follow $follow): void
    {
        //
    }

    /**
     * Handle the Follow "force deleted" event.
     */
    public function forceDeleted(Follow $follow): void
    {
        //
    }
}
