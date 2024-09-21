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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->unsignedBigInteger('age_range');
            $table->unsignedBigInteger('gender');
            $table->unsignedBigInteger('education_level');
            $table->string('other_education')->nullable();
            $table->string('level_of_government');
            $table->unsignedBigInteger('county');
            $table->unsignedBigInteger('organization_type');
            $table->unsignedBigInteger('institution_type');
            $table->string('job_title');
            $table->string('disability');
            $table->string('disability_details')->nullable();

            $table->unsignedBigInteger('role_category');
            $table->string('other_role')->nullable();
            $table->integer('digital_transformation');
            $table->integer('data_governance');
            $table->integer('change_management');
            $table->integer('agile_strategy');
            $table->integer('frequency_digital_strategy');
            $table->integer('confidence_leading_digital');
            $table->integer('basic_computer_skills');
            $table->integer('digital_communication_skills');
            $table->integer('data_management_skills');
            $table->integer('cybersecurity_awareness');
            $table->integer('digital_methodologies');
            $table->integer('project_management_skills');
            $table->integer('emerging_technologies');
            $table->integer('digital_governance');
            $table->integer('software_development');
            $table->integer('data_driven_decision_making');
            $table->integer('electronic_document_management');
            $table->integer('system_analysis_and_design');
            $table->integer('web_application_design_and_development');

            $table->string('ai_use');
            $table->string('example');
            $table->text('other_ai_examples');

            $table->integer('ai_awareness');
            $table->integer('digital_data_organization');
            $table->integer('data_reliability');
            $table->integer('data_organization');
            $table->integer('digital_communication');
            $table->integer('information_sharing');
            $table->integer('citizen_engagement');
            $table->integer('online_collaboration');
            $table->integer('digital_content_creation');
            $table->integer('content_reworking');
            $table->integer('digital_security');
            $table->integer('data_privacy');
            $table->integer('digital_identity');
            $table->integer('environmental_impact');
            $table->integer('technical_problems');
            $table->integer('creative_challenges');
            $table->integer('ai_proficiency');
            $table->integer('tech_knowledge');

            $table->string('formal_training');
            $table->text('additional_training');
            $table->string('skill_improvements');
            $table->string('challenges');
            $table->text('additional_challenges');
            $table->string('digital_tools');
            $table->text('additional_tools');
            $table->string('devices');

            $table->string('training_formats');
            $table->string('training_frequency');
            $table->text('additional_insights');

            $table->string('ip_address')->nullable();
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
        Schema::dropIfExists('submissions');
    }
};
