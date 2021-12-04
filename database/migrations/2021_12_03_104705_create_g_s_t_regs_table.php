<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGSTRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_s_t_regs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('org_name')->nullable();
            $table->text('about_business')->nullable();
            $table->string('constitution_of_business');
            $table->string('pan_card_no');
            $table->text('premises_address')->nullable();
            $table->string('electricity_bill')->nullable();
            $table->string('pan_card')->nullable();
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
        Schema::dropIfExists('g_s_t_regs');
    }
}
