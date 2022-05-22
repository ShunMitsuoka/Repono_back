<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ユーザid');
            $table->string('name')->comment('ユーザ名');
            $table->string('password')->comment('パスワード');
            $table->string('email')->comment('メールアドレス')->unique();
            $table->string('profile_image', 255)->nullable()->comment('トップ画像');
            $table->integerinteger('delete_flg')->default(0)->comment('削除フラグ');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
