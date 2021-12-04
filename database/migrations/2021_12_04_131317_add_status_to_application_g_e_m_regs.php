<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToApplicationGEMRegs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_g_e_m_regs', function (Blueprint $table) {
            $table->enum('status',['New','Processing','Deliver','Cancel']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('application_g_e_m_regs', function (Blueprint $table) {
            //
        });
    }
}
