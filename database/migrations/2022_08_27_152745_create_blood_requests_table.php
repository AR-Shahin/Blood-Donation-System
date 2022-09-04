<?php

use App\Models\Blood;
use App\Models\Upazila;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('donor_id')->nullable();
            $table->foreignId('blood_id');
            $table->foreignId('upazila_id');
            $table->date('date');
            $table->enum('status',['pending','accepted','complete'])->default('pending');
            $table->text('address');
            $table->time('time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_requests');
    }
};
