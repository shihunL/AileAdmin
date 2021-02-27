<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
           $table->increments('user_id');

      $table->string('user_name',32)->default('admin')->comment('用户登录名');

      $table->string('user_password',32)->default('123456')->comment('用户密码');

      $table->ipAddress('user_ip')->default('')->comment('用户最后一次登录ip');

      $table->integer('user_login_cnt')->default(0)->comment('用户登录次数');

      $table->timestamps();

      });
    }

    /**
     * Reverse the migrations.user
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
