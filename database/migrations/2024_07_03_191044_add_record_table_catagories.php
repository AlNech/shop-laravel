<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')->insert(
            array(
                [
                    'name' => 'Чай',
                    'code' => 'tea',
                    'description' => '',
                    'image' => ''
                ],
                [
                    'name' => 'Кофе',
                    'code' => 'coffee',
                    'description' => '',
                    'image' => ''
                ],
                [
                    'name' => 'Сладости',
                    'code' => 'sweets',
                    'description' => '',
                    'image' => ''
                ],


            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
