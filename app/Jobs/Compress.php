<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Tinify\Tinify;

class Compress implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue,SerializesModels;
    public $file;
    
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function handle(): void

    {
        \Tinify\setKey(env('TINIFY_API_KEY'));
        $source = \Tinify\fromFile(storage_path('/app/public/'.$this->file));
        $source->toFile(storage_path('/app/public/'.$this->file));
    }
}
