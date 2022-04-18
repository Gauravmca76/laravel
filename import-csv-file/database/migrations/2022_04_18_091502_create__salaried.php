<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaried extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaried', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname',200)->nullable();
            $table->string('lastname',200)->nullable();
            $table->string('mobile',200)->nullable();
            $table->string('alter_mobile',200)->nullable();
            $table->string('dob',200)->nullable();
            $table->string('age',200)->nullable();
            $table->string('m_income',200)->nullable();
            $table->string('a_income',200)->nullable();
            $table->string('gender',200)->nullable();
            $table->string('married_status',200)->nullable();
            $table->string('city',200)->nullable();
            $table->string('state',200)->nullable();
            $table->string('circle',200)->nullable();
            $table->string('msc_code',200)->nullable();
            $table->string('operator',200)->nullable();
            $table->string('occupation',200)->nullable();
            $table->string('email_id',200)->nullable();
            $table->string('pincode',200)->nullable();
            $table->string('location',200)->nullable();
            $table->string('exp',200)->nullable();
            $table->string('desgination',200)->nullable();
            $table->string('company_name',200)->nullable();
            $table->string('company_type',200)->nullable();
            $table->string('education',200)->nullable();
            $table->string('source',500)->nullable();
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
        Schema::dropIfExists('salaried');
    }
}
