<?php

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
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_email');
            $table->string('phone_number');
            $table->string('qualification');
            $table->string('membership_category');
            $table->string('certification_path')->nullable();
            $table->string('academic_qualifications_path')->nullable();
            $table->string('work_experience_path')->nullable();
            $table->string('professional_certifications_path')->nullable();
            $table->string('identification_path')->nullable();
            $table->string('applicant_status');
            $table->string('payment_option');
            $table->boolean('fee_acknowledged');
            $table->string('reference');
            $table->double('amount');
            $table->string('payment_status');
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
        Schema::dropIfExists('application_forms');
    }
};
