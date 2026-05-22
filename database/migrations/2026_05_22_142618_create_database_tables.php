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
            $table->id();
            $table->string('username', 32);
            $table->string('email', 40);
            $table->char('password', 60);
            $table->boolean('admin')->default(false);
            $table->boolean('banned')->default(false);
            $table->boolean('verified_email')->default(false);
            $table->char('login_token', 128)->nullable();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32)->nullable();
            $table->foreignId('parent_category')->nullable()->constrained('categories');
        });

        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title', 64)->nullable();
            $table->text('description')->nullable();
            $table->foreignId('userid')->constrained('accounts');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->boolean('active')->default(false);
            $table->foreignId('current_bid_holder')->nullable()->constrained('accounts');
        });

        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->string('comment', 300)->nullable();
            $table->boolean('thumbs_up')->default(false);
            $table->foreignId('listing')->constrained('listings');
            $table->foreignId('userid')->constrained('accounts');
        });

        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 19, 4);
            $table->foreignId('bidder')->constrained('accounts');
            $table->timestamp('bid_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bids');
        Schema::dropIfExists('review');
        Schema::dropIfExists('listings');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('accounts');
    }
};
