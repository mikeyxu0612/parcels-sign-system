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
            $table->id('t_ID')->unsigned()->comment('住户編號');
            $table->string('T_name')->comment('住戶姓名');
            $table->string('phone')->comment('連絡電話');
            $table->foreignId('D_ID')->unsigned()->comment('住址(外部键');
            $table->timestamps();
            $table->foreign('D_ID')->references('id')->on('addresses')->onDelete('cascade');
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
