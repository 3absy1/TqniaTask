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
        Schema::create('topup_requests', function (Blueprint $table) {
        $table->id();
        $table->foreignId('client_id')->references('id')->on('clients')->onDelete('cascade');
        $table->decimal('amount', 10, 2);
        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
        $table->foreignId('action_by')->nullable()->constrained('users')->nullOnDelete();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topup_requests');
    }
};
