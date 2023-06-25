<?php

namespace App\Console\Commands;

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
        try {
            throw new Exception('Сообщение об ошибке', 123);
        } catch (Exception $e) {
            echo 'Было поймано исключение: ' . $e->getMessage() . '. Код: ' . $e->getCode();
        }
    }
}
