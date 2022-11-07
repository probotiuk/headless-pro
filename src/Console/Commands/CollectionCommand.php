<?php

namespace Probotiuk\HeadlessPro\Console\Commands;

use Illuminate\Console\Command;

class CollectionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collections:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $ask = $this->ask('Start install?');
        dd($ask);
    }
}
