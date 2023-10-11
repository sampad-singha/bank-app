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
            $table->integer('branch_code')->nullable();
            $table->foreign('branch_code')
                ->references('branch_code')
                ->on('branches');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accounts', function (Blueprint $table) {
            if(Schema::hasColumn('accounts', 'branch_code')){
                $table->dropForeign('accounts_branch_code_foreign');
                $table->dropColumn('branch_code');
            }
        });
    }
};
