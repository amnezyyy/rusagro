<?php

namespace App\Console\Commands;

use App\Models\Order;
use Exception;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach (Order::where('status', 1)->get() as $item)
        {
            try {
                $item->update([
                    'status' => 2
                ]);
            } catch (Exception $exception) {
                print_r($exception -> getMessage());
            }
        }
        return 0;
    }
}
