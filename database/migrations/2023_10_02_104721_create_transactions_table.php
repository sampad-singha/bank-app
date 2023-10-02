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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')
                ->constrained('accounts', 'account_id')
                ->cascadeOnDelete();
            $table->enum('type', ['deposit', 'withdrawal' , 'sent', 'received']);
            $table->string('receiver_id')
                ->nullable();
            $table->decimal('amount', 10, 2);
//            $table->foreign('balance')
//                ->references('balance')
//                ->on('accounts');
            $table->boolean('status')
                ->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
