<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $class = [
            ['class_name' => 'MI 2A',],
            ['class_name' => 'MI 2B',],
            ['class_name' => 'MI 2C',],
            ['class_name' => 'MI 2D',],
            ['class_name' => 'MI 2E',],
            ['class_name' => 'MI 2F',],
            ['class_name' => 'MI 2G',],
        ];
            DB::table('classes')->insert($class);    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
