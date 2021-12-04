<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdateRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('update_regs', function (Blueprint $table) {
            $table->id();
            $table->string('aadhar_no');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('org_name')->nullable();
            $table->string('udyam_reg_no')->nullable();
            $table->string('type_of_org');
            $table->string('updates');
            $table->text('decription');
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
        Schema::dropIfExists('update_regs');
    }
}
