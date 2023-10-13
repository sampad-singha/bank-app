<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('transactions_account_id_foreign');
            $table->renameColumn('account_id', 'account_no');
            $table->renameColumn('receiver_id', 'receiver_account_no');
            $table->foreign('account_no')->references('account_no')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('transactions_account_no_foreign');
            $table->renameColumn('account_no', 'account_id');
            $table->renameColumn('receiver_account_no', 'receiver_id');
            $table->foreign('account_id')->references('account_no')->on('accounts')->onDelete('cascade');
        });
    }
};
