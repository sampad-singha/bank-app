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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('account_no')->nullable()->after('id')->default(null);
            $table->foreign('account_no')
                ->references('account_no')
                ->on('accounts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('role')->default('user')->after('account_no');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['account_no']);
            $table->dropColumn('account_no');
            $table->dropColumn('role');
        });
    }
};
