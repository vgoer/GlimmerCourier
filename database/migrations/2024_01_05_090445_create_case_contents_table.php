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
        Schema::create('case_contents', function (Blueprint $table) {
            $table->id()->comment('id');
            $table->integer('user_id')->index('user_id')->comment('用户id');
            $table->string('platform', 20)->comment('社交平台');
            $table->string('account', 100)->comment('联系方式');
            $table->longText('content')->comment('发送内容');
            $table->string('send_data', 100)->comment('发送时间');
            $table->longText('remarks')->nullable()->comment('备注');
            $table->timestamps();

            $table->comment('主要内容表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_contents');
    }
};
