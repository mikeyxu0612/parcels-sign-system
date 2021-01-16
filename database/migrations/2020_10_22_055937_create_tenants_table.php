<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id()->comment('住户編號');
            $table->string('T_name')->comment('住戶姓名');
            $table->char('phone')->comment('連絡電話');
            $table->string('city')->comment('縣/市');
            $table->string('areas')->comment('鄉鎮/區');
            $table->foreignId('A_ID')->unsigned()->comment('具體住址');
            $table->timestamps();
            $table->foreign('A_ID')->references('id')->on('addresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
