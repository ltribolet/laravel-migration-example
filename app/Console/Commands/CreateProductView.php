<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateProductView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:view:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will create the products view';

    public function handle()
    {
        DB::statement("
            CREATE VIEW products
            AS
            SELECT * FROM items
            ;
        ");
    }
}
