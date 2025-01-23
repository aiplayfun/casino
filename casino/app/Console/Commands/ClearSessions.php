<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ClearSessions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'session:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove session files in storage/framework/sessions/';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Get all files in session directory
        $files = File::glob(storage_path('framework/sessions/*'));

        // Exclude the .ignore file
        $files = array_filter($files, function ($file) {
            return basename($file) !== '.ignore';
        });

        File::delete(...$files);

        $this->info('Session cleared successfully.');
    }
}