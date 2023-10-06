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
        Schema::table('accounts', function (Blueprint $table) {
            if(Schema::hasColumn('accounts', 'account_type'))
                $table->dropColumn('account_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accounts', function (Blueprint $table) {
            if(!Schema::hasColumn('accounts', 'account_type'))
                $table->enum('account_type', ['sv', 'ch', 'fd']);
        });
    }
};
