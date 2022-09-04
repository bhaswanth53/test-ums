<?php

namespace App\Listeners;

use App\Events\TaskUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

use App\Repositories\Task\TaskRepository;

class NootifyTaskUpdate
{
    private $task;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(TaskRepository $task)
    {
        $this->task = $task;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\TaskUpdated  $event
     * @return void
     */
    public function handle(TaskUpdated $event)
    {
        $task = $this->task->update($event->id, [
            'status' => $event->status
        ]);

        Log::info("Task $event->id has been updated with status [$event->status]");
    }
}
