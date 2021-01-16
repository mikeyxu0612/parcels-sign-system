<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id()->comment('包裹編號');
            $table->foreignId('A_ID')->unsigned()->comment('住址(外部键)');
            $table->boolean('sign')->comment('簽收與否');
            $table->date('sign_date')->default('2019-01-01')->comment('管理員簽收時間');
            $table->date('sign_time')->default('2019-01-01')->comment('住戶的簽收时间');
            $table->string('image')->comment('包裹圖片');
            $table->string('Sign_proof')->comment('簽收憑證');
            $table->foreign('A_ID')->references('id')->on('addresses')->onDelete('cascade');
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
        Schema::dropIfExists('parcels');
    }
}
