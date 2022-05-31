<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kam',50)->nullable();
            $table->string('inv_hardcode_date',50)->nullable();
            $table->string('company_name',200)->nullable();
            $table->string('client_name',200)->nullable();
            $table->string('client_bankname',200)->nullable();
            $table->string('invoice_date',50)->nullable();
            $table->string('billable_amount',50)->nullable();
            $table->string('profitability_amount',50)->nullable();
            $table->string('received_amount',50)->nullable();
            $table->string('chq_no',100)->nullable();
            $table->string('chq_amount',50)->nullable();
            $table->string('tds',50)->nullable();
            $table->string('payment_status',50)->nullable();
            $table->string('qhr_bankname',50)->nullable();
            $table->string('audit_by',50)->nullable();
            $table->string('cur_details',50)->nullable();
            $table->string('cur_dt',50)->nullable();
            $table->string('cur_inv_details',50)->nullable();
            $table->string('pay_details',50)->nullable();
            $table->string('remark',150)->nullable();
            $table->string('up_dt',50)->nullable();
            $table->string('inv_no',50)->nullable();
            $table->string('inv_id',50)->nullable();
            $table->string('pending_day',50)->nullable();
            $table->string('pay_received_day',50)->nullable();
            $table->string('base_deducation',50)->nullable();
            $table->string('pending_remark',50)->nullable();
            $table->string('anti_date_bill',50)->nullable();
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
        Schema::dropIfExists('billing_details');
    }
}
