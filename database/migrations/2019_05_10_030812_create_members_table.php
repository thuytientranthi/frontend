<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('email',64)->unique();
            $table->string('phone')->unique();
            $table->string('gender')->comment('male or female');
            $table->date('birthday')->comment('yyy/mm/dd');
            $table->string('address');
            $table->integer('status')->unsigned();
            $table->timestamps();

            $table->foreign('status')->references('id')->on('statuses')->onDelete('cascade');
        });

        DB::table('members')->insert([
            [       
                'id' => 1,
                'name' => 'Trần Thị Thủy Tiên',
                'email' => 'tienttt@rikeisoft.com',
                'phone' => '+84971473895',
                'status' => '2',
                'gender' => 'female',
                'birthday' => '1997/02/16',
                'address' => 'Đăk Lăk',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],  
            [       
                'id' => 2,
                'name' => 'Trần Thị Xuân Phượng',
                'email' => 'phuongttx@rikeisoft.com',
                'phone' => '+84971673895',
                'status' => '1',
                'gender' => 'female',
                'birthday' => '1997/06/16',
                'address' => 'Đăk Lăk',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], 
            [ 
                'id' => 3,
                'name' => 'Nguyễn Ngọc Thành',
                'email' => 'thanhnn@rikeisoft.com',
                'phone' => '+84971673795',
                'status' => '3',
                'gender' => 'male',
                'birthday' => '1997/06/22',
                'address' => 'Đăk Lăk',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
        // \DB::statement('ALTER SEQUENCE users_id_seq RESTART WITH 4');
        \DB::statement('ALTER TABLE members AUTO_INCREMENT = 4;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
