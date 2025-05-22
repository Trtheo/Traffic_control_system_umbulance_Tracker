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
        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->after('role');
        $table->string('phone_number')->nullable()->after('email');
        $table->string('ambulance_id')->nullable()->after('phone_number');
        $table->string('hospital_name')->nullable()->after('ambulance_id');
        $table->string('license_number')->nullable()->after('hospital_name');
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['status', 'phone_number', 'ambulance_id', 'hospital_name', 'license_number']);
    });
}

};
