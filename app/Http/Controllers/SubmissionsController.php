<?php

namespace App\Http\Controllers;

use App\Models\AgeGroup;
use App\Models\County;
use App\Models\EducationLevel;
use App\Models\Gender;
use App\Models\Office;
use App\Models\Organization;
use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    //

    public function success(){
        return view('business-form.success');
    }
    public function showStep($step)
    {
        // Retrieve session data and pass it to the view
        $data = session()->get('businessForm', []);
        $genders=Gender::latest()->get();
        $ageRanges=AgeGroup::latest()->get();
        $educationLevels=EducationLevel::latest()->get();
        $county=County::latest()->get();
        $organizations=Organization::latest()->get();



        return view("business-form.step$step", compact('data','organizations', 'step','genders','ageRanges','educationLevels','county'));
    }

    public function getInstitutions(Request $request)
    {
        // Validate that 'level' is passed
        $validatedData = $request->validate([
            'level' => 'required|integer',
        ]);

        // Fetch offices where organization_id matches the level
        $offices = Office::where('organization_id', $request->level)->get();

        // Return the offices as a JSON response
        return response()->json([
            'institutions' => $offices
        ]);
    }

    public function storeStep(Request $request)
    {
        $step = $request->input('step');

        // Validate form data based on the step
        switch ($step) {
            case 1:
                $request->validate([
                    'name' => 'required',
                    'age_range' => 'required',
                    'gender' => 'required',
                    'education_level' => 'required',
                    'other_education' => 'nullable',
                    'level_of_government' => 'required',
                    'county' => 'nullable',
                    'organization_type' => 'nullable',
                    'institution_type' => 'nullable',
                    'job_title' => 'required',
                    'disability' => 'required',
                    'disability_details' => 'nullable',

                ]);
                break;
            case 2:
                $request->validate([
                    'role_category' => 'required',
                    'other_role' => 'nullable',
                    'digital_transformation' => 'nullable',
                    'data_governance' => 'nullable',
                    'change_management' => 'nullable',
                    'agile_strategy' => 'nullable',
                    'frequency_digital_strategy' => 'nullable',
                    'confidence_leading_digital' => 'nullable',
                    'basic_computer_skills' => 'required',
                    'digital_communication_skills' => 'required',
                    'data_management_skills' => 'required',
                    'cybersecurity_awareness' => 'required',
                    'digital_methodologies' => 'required',
                    'project_management_skills' => 'required',
                    'emerging_technologies' => 'required',
                    'digital_governance' => 'required',
                    'software_development' => 'required',
                    'data_driven_decision_making' => 'required',
                    'electronic_document_management' => 'required',
                    'system_analysis_and_design' => 'required',
                    'web_application_design_and_development' => 'required',

                    'ai_use' => 'required',
                    'example' => 'nullable|array',
                    'other_ai_examples' => 'nullable',


                ]);
                break;
            case 3:
                $request->validate([
                    'ai_awareness' => 'required',
                    'digital_data_organization' => 'required',
                    'data_reliability' => 'required',
                    'data_organization' => 'required',
                    'digital_communication' => 'required',
                    'information_sharing' => 'required',
                    'citizen_engagement' => 'required',
                    'online_collaboration' => 'required',
                    'digital_content_creation' => 'required',
                    'content_reworking' => 'required',
                    'digital_security' => 'required',
                    'data_privacy' => 'required',
                    'digital_identity' => 'required',
                    'environmental_impact' => 'required',
                    'technical_problems' => 'required',
                    'creative_challenges' => 'required',
                    'ai_proficiency' => 'required',
                    'tech_knowledge' => 'required',


                ]);
                break;
            case 4:
                $request->validate([
                    'formal_training' => 'required|array',
                    'additional_training' => 'required',
                    'skill_improvements' => 'required|array',
                    'challenges' => 'required|array',
                    'additional_challenges' => 'required',
                    'digital_tools' => 'required|array',
                    'additional_tools' => 'required',
                    'devices' => 'required|array',
                    'additional_ways'=>'required',


                ]);
                break;
            case 5:
                $request->validate([

                    'training_formats' => 'required|array',
                    'training_frequency' => 'required|array',
                    'additional_insights' => 'required',

                ]);
                break;

            // Add other step validations here
            // ...
        }

        // Store the validated data in the session
        $formData = session()->get('businessForm', []);
        $formData = array_merge($formData, $request->except('step'));
        session()->put('businessForm', $formData);

        // Determine next step or finish the process
        if ($step < 5) {
            return redirect()->route('business.form.step', ['step' => $step + 1]);
        }

//        dd($request);
        $submissionData = $formData;
        $submissionData['ip_address'] = $request->ip();

        // Convert array data to comma-separated strings
//        $submissionData['example'] = implode(',', $submissionData['example']);
        $submissionData['example'] = isset($submissionData['example']) ? implode(',', $submissionData['example']) : '';

        $submissionData['formal_training'] = implode(',', $submissionData['formal_training']);
        $submissionData['skill_improvements'] = implode(',', $submissionData['skill_improvements']);
        $submissionData['challenges'] = implode(',', $submissionData['challenges']);
        $submissionData['digital_tools'] = implode(',', $submissionData['digital_tools']);
        $submissionData['devices'] = implode(',', $submissionData['devices']);
        $submissionData['training_formats'] = implode(',', $submissionData['training_formats']);
        $submissionData['training_frequency'] = implode(',', $submissionData['training_frequency']);
        Submission::create($submissionData);
        session()->forget('businessForm');
        // Final processing of the form (store in DB, etc.)
        return redirect()->route('business-form.success'); // You can change to success page or action.
    }
}
