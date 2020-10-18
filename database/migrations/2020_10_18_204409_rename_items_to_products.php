<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Migrations\Migration;

class RenameItemsToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(<<<EOT
            RENAME TABLE
                `products` TO `tmp_products`, -- Rename view to a temp view
                `items` TO `products` -- rename original real table
        EOT
        );

        DB::statement('DROP VIEW tmp_products');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('RENAME TABLE `products` TO `items`');
        Artisan::call('db:view:product');
    }
}
