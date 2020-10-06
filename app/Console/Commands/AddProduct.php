<?php

namespace App\Console\Commands;

use App\Models\Model\Product;
use Illuminate\Console\Command;

class AddProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:addproduct';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add product every minute using cron job.';

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
        // return 0;
        $product = new Product();
        $product->name = "test";
        $product->save();

    }
}
