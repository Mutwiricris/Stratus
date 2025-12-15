<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('conversations', function (Blueprint $table) {
            $table->string('client_fingerprint')->nullable()->after('customer_email');
            $table->string('client_ip')->nullable()->after('client_fingerprint');
            $table->string('user_agent')->nullable()->after('client_ip');

            // Add index for faster lookups
            $table->index('client_fingerprint');
            $table->index('client_ip');
        });
    }

    public function down(): void
    {
        Schema::table('conversations', function (Blueprint $table) {
            $table->dropIndex(['client_fingerprint']);
            $table->dropIndex(['client_ip']);
            $table->dropColumn(['client_fingerprint', 'client_ip', 'user_agent']);
        });
    }
};
