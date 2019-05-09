<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        DB::table('statuses')->insert([
            [       
                'id' => 1,
                'name' => 'Chờ xử lý'
            ],
            [       
                'id' => 2,
                'name' => 'Hoạt động'
            ],
            [       
                'id' => 3,
                'name' => 'Chặn'
            ],    
        ]);
        // \DB::statement('ALTER SEQUENCE statuses_id_seq RESTART WITH 4');
        \DB::statement('ALTER TABLE statuses AUTO_INCREMENT = 4');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
