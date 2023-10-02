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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('account_id');

//            removed
            $table->string('account_name', 50);
            $table->string('account_number', 10)->unique();

            $table->enum('account_type', ['sv', 'ch', 'fd']);
            $table->enum('account_holder', ['1', '2']);
            $table->string('account_holder_name', 50);
            $table->date('dob');
            $table->string('email', 50);
            $table->string('mobile', 11);
            $table->string('present_address', 100);
            $table->string('permanent_address', 100);
            $table->string('father_name', 50);
            $table->string('mother_name', 50);
            $table->string('spouse_name', 50)->nullable();
            $table->string('nid', 17);
            $table->string('tin', 12)->nullable();
            $table->string('passport', 20)->nullable();
            $table->string('nationality', 20);
            $table->string('occupation', 20);
            $table->integer('income');
            $table->string('income_source', 100);
            $table->string('division', 50);
            $table->string('district', 50);
            $table->string('thana', 50);
            $table->string('post_code', 4);
            $table->string('house_road', 100);
            $table->string('p_division', 50);
            $table->string('p_district', 50);
            $table->string('p_thana', 50);
            $table->string('p_post_code', 4);
            $table->string('p_house_road', 100);
            $table->string('ref_name', 50);
            $table->string('ref_account_no', 10);
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
