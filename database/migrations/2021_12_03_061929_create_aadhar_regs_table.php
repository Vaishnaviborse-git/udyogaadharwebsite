<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAadharRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aadhar_regs', function (Blueprint $table) {
            $table->id();
            $table->string('aadhar_no');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('email');
            $table->string('gender')->nullable();
            $table->string('social_category')->nullable();
            $table->string('physically_handicapped')->nullable();
            $table->string('pan_card')->nullable();
            $table->string('org_name')->nullable();
            $table->string('type_of_org')->nullable();
            $table->text('premises_address')->nullable();
            $table->string('GSTIN_no')->nullable();
            $table->string('date_of_start')->nullable();
            $table->string('bank_account_no')->nullable();
            $table->string('IFSC_code')->nullable();
            $table->string('business_activity')->nullable();
            $table->text('about_product')->nullable();
            $table->integer('no_of_emp')->nullable();
            $table->float('total_investment')->nullable();
            $table->float('gross_turnover')->nullable();
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
        Schema::dropIfExists('aadhar_regs');
    }
}
