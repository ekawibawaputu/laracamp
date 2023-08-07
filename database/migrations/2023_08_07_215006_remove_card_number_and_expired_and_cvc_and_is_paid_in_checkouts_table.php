<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveCardNumberAndExpiredAndCvcAndIsPaidInCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            //
            $table->dropColumn('card_number');
            $table->dropColumn('expired');
            $table->dropColumn('cvc');
            $table->dropColumn('is_paid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            //
            $table->dropColumn('card_number',20)->nullable();
            $table->dropColumn('expired')->nullable();
            $table->dropColumn('cvc',3)->nullable();
            $table->dropColumn('is_paid')->default(false);
        });
    }
}
