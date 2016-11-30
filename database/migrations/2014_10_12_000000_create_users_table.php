<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index()->comment('自增ID');
            $table->string('email')->unique()->comment('邮件');
            $table->string('username')->unique()->comment('用户名');
            $table->string('password', 60)->comment('密码');
            $table->string('name')->nullable()->comment('姓名');
            $table->string('gender')->nullable()->comment('性别');
            $table->string('nickname')->nullable()->comment('昵称');
            $table->string('mobile')->nullable()->comment('手机号');
            $table->string('url')->nullable()->comment('个人主页');
            $table->string('profile_image')->nullable()->comment('头像路径');
            //基本信息
            $table->date('birthday')->nullable()->comment('生日');
            $table->string('country')->nullable()->comment('国籍');
            $table->string('city')->nullable()->comment('城市');
            $table->string('address')->nullable()->comment('具体地址');
            $table->text('bio')->nullable()->comment('个人简介');
            //社交方式
            $table->string('github')->nullable()->comment('GITHUB 用户名');
            $table->string('qq')->nullable()->comment('QQ号');
            $table->string('weixin')->nullable()->comment('微信号');
            $table->string('weibo')->nullable()->comment('微博号');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
