<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationGEMRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_g_e_m_regs', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('org_name')->nullable();
            $table->string('type_of_org')->nullable();
            $table->string('business_pan')->nullable();
            $table->string('date_of_start')->nullable();
            $table->text('business_address')->nullable();
            $table->string('IFSC_code')->nullable();
            $table->string('bank_account_no')->nullable();
            $table->string('bank_name')->nullable();
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
        Schema::dropIfExists('application_g_e_m_regs');
    }
}
