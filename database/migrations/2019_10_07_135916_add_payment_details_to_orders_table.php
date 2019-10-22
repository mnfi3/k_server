<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentDetailsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('pan')->nullable()->after('local_time');
            $table->string('req_id')->nullable()->after('pan');
            $table->string('serial_transaction')->nullable()->after('req_id');
            $table->string('terminal_no')->nullable()->after('serial_transaction');
            $table->string('trace_number')->nullable()->after('terminal_no');
            $table->date('transaction_date')->nullable()->after('trace_number');
            $table->string('transaction_time')->nullable()->after('transaction_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
