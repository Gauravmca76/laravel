<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('inv_num',200)->nullable();
            $table->string('inv_num_actual',200)->nullable();
            $table->string('inv_disp_num',200)->nullable();
            $table->string('inv_hardcode_dt',200)->nullable();
            $table->string('inv_from',200)->nullable();
            $table->string('inv_to',200)->nullable();
            $table->string('inv_kam',200)->nullable();
            $table->string('inv_type',200)->nullable();
            $table->string('inv_client',200)->nullable();
            $table->string('inv_client_id',200)->nullable();
            $table->string('inv_kindattenation',200)->nullable();
            $table->string('inv_particular1',200)->nullable();
            $table->string('inv_quantity1',200)->nullable();
            $table->string('inv_rate1',200)->nullable();
            $table->string('currancy1',200)->nullable();
            $table->string('inv_amount1',200)->nullable();
            $table->string('inv_total',200)->nullable();
            $table->string('inv_amount_withouttax',200)->nullable();
            $table->string('inv_servicetax',200)->nullable();
            $table->string('inv_svtaxamount',200)->nullable();
            $table->string('inv_sbctaxamount',200)->nullable();
            $table->string('inv_rate6',200)->nullable();
            $table->string('inv_rate7',200)->nullable();
            $table->string('inv_kktaxamount',200)->nullable();
            $table->string('inv_kkrate',200)->nullable();
            $table->string('inv_date',200)->nullable();
            $table->string('inv_amount',200)->nullable();
            $table->string('amtword',200)->nullable();
            $table->string('inv_gen_date',200)->nullable();
            $table->string('inv_flag',200)->nullable();
            $table->string('anti_date',200)->nullable();
            $table->string('update_by',200)->nullable();
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
        Schema::dropIfExists('invoice_data');
    }
}
