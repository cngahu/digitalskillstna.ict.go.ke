<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 2 - Digital Strategy and Proficiency</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Styles for the header and form */
        .form-header {
            background-color: #005B9A;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
        }
        /*.progress-bar {*/
        /*    margin-bottom: 20px;*/
        /*}*/
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        .progress {
            height: 25px;
        }

        .progress-bar {
            background-color: #007bff;
        }
        .navbar {
            background-color: #005B9A;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
@php

$categories=\App\Models\Category::latest()->get();
$examples=\App\Models\AIExample:: latest()->get();

@endphp
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Ministry of Information Communication and the Digital Economy</a>
        <small style="color: whitesmoke">Public Sector
            Digital Skills
            Baseline Assessment</small>
    </div>
</nav>
<div class="container">
    <!-- Ministry of ICT Header -->
    <h3>Stage 2: Identifying Current Digital Skill levels</h3>

    <!-- Progress Bar -->
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
            Step 2 of 5
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('business.form.store') }}" method="POST">
        @csrf
        <input type="hidden" name="step" value="2">


        <div class="form-group mt-4">
            <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                17
            </h5>
            <label for="role_category">Which of the following categories best describes your role in government?
                <span style="color: red">*</span>
            </label>

            <!-- Dropdown for role categories -->
            <select class="form-select" id="role_category" name="role_category" required>
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('role_category', $data['role_category'] ?? '') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('role_category')
            <span class="text-danger">{{ $message }}</span>
            @enderror


            <!-- Text field for specifying if "Other" is selected -->
            <div id="other_role_field" class="mt-2" style="{{ old('role_category') == '10' ? 'display: block;' : 'display: none;' }}">
                <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                    18
                </h5>
                <label for="other_role">Please specify:</label>
                <input type="text" class="form-control" id="other_role" name="other_role" value="{{ old('other_role') }}">
                @error('other_role')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div id="executive" style="display: none;">
            <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                19
            </h5>
        <div class="form-group">
            <label>"On a scale of 1 to 5, how would you rate your proficiency in the following areas?"</label>
            <small class="form-text text-muted mb-3">(1 = Minimal knowledge or experience, 5 = Expert-level knowledge and confidence)</small>

            <br>
            <br>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="digital_transformation">Strategic planning for digital transformation:</label>
                    <small style="font-style: italic">: Developing,overseeing, and leading
                        long-term plans into Ministries/ Departments Operations

                    </small>
                    <select class="form-select" id="digital_transformation" name="digital_transformation" >
                        <option value="">Select proficiency level</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ old('digital_transformation', $data['digital_transformation'] ?? '') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('digital_transformation')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label for="data_governance">Digital & Data governance and compliance:</label>
                    <small style="font-style: italic">: Ensuring that
                        digital
                        initiatives
                        adhere to legal,
                        ethical, and
                        organizational
                        policies.

                    </small>
                    <select class="form-select" id="data_governance" name="data_governance" >
                        <option value="">Select proficiency level</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ old('data_governance', $data['data_governance'] ?? '') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('data_governance')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label for="change_management">Change management in a digital context:</label>
                    <small style="font-style: italic">: Managing the
                        human and
                        organizational
                        aspects of
                        transitioning to
                        new digital tools
                        and processes.

                    </small>
                    <select class="form-select" id="change_management" name="change_management" >
                        <option value="">Select proficiency level</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ old('change_management', $data['change_management'] ?? '') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('change_management')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label for="agile_strategy">Agile strategy development:</label>
                    <small style="font-style: italic">: Creating and
                        iterating
                        strategies
                        quickly to
                        respond to
                        changes in the
                        digital
                        landscape.
                    </small>
                    <select class="form-select" id="agile_strategy" name="agile_strategy" >
                        <option value="">Select proficiency level</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ old('agile_strategy', $data['agile_strategy'] ?? '') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('agile_strategy')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>


        <!-- Frequency of considering digital strategy and Confidence in leading digital transformation -->
        <div class="row mt-4">
            <!-- Frequency of considering digital strategy -->
            <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                20
            </h5>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="frequency_digital_strategy">"On a scale of 1 to 5, how often do you incorporate or consider digital strategy into overall Ministry/Departmental strategy?"</label>
                    <small class="form-text text-muted mb-3" style="font-style: italic">" Frequency of considering digital initiatives into broader organizational goals
                        with 1= Nearly Never and 5 = Always/Consistently</small>
                    <select class="form-select" id="frequency_digital_strategy" name="frequency_digital_strategy" >
                        <option value="">Select frequency</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ old('frequency_digital_strategy', $data['frequency_digital_strategy'] ?? '') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('frequency_digital_strategy')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Confidence in leading digital transformation -->
            <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                21
            </h5>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="confidence_leading_digital">On a scale of 1 to 5, how confident are you in leading, overseeing and driving digital transformation initiatives at the Ministry and Departmental level?</label>
                    <small class="form-text text-muted mb-3" style="font-style: italic"> Confidence in guiding your team through digital changes, making decisions,
                        and addressing challenges that arise. [Please rate skill-level on a scale of 1-5, with 1 representing
                        "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."] *</small>
                    <select class="form-select" id="confidence_leading_digital" name="confidence_leading_digital" >
                        <option value="">Select confidence level</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ old('confidence_leading_digital', $data['confidence_leading_digital'] ?? '') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('confidence_leading_digital')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        </div>
        <!-- Digital Skills Proficiency -->
        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
            22
        </h5>
        <div class="container mt-4">
            <h5>Which of the following digital skills do you have knowledge of?</h5>
            <small class="form-text text-muted mb-3">[Please rate skill-level on a scale of
                1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level
                knowledge and confidence."]
            </small>
            <br>
            <br>

            <small style="font-style: italic">Think about which skills you can use proficiently in practical scenarios, where 1 = Not confident at all
                and 5 = Extremely confident <span style="color: red">*</span></small>
            <br>
            <br>
            <div class="row">
                <!-- Basic computer skills -->
                <div class="col-md-12 mb-3">
                    <label>Basic computer skills (e.g., typing, file management)</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="basic_computer_skills" id="basic_computer_skills_{{ $i }}" value="{{ $i }}" {{ old('basic_computer_skills', $data['basic_computer_skills'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="basic_computer_skills_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('basic_computer_skills')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Digital communication skills -->
                <div class="col-md-12 mb-3">
                    <label>Digital communication skills (e.g., email etiquette, video conferencing)</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="digital_communication_skills" id="digital_communication_skills_{{ $i }}" value="{{ $i }}" {{ old('digital_communication_skills', $data['digital_communication_skills'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="digital_communication_skills_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('digital_communication_skills')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <!-- Data management/analysis skills -->
                <div class="col-md-12 mb-3">
                    <label>Data management/analysis skills (e.g., Excel, data collection, data visualization)</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="data_management_skills" id="data_management_skills_{{ $i }}" value="{{ $i }}" {{ old('data_management_skills', $data['data_management_skills'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="data_management_skills_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('data_management_skills')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Cybersecurity awareness -->
                <div class="col-md-12 mb-3">
                    <label>Cybersecurity awareness and best practices</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cybersecurity_awareness" id="cybersecurity_awareness_{{ $i }}" value="{{ $i }}" {{ old('cybersecurity_awareness', $data['cybersecurity_awareness'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="cybersecurity_awareness_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('cybersecurity_awareness')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <!-- Digital methodologies -->
                <div class="col-md-12 mb-3">
                    <label>Digital methodologies and approaches (e.g., agile methodology, digital design thinking, human-centered design)</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="digital_methodologies" id="digital_methodologies_{{ $i }}" value="{{ $i }}" {{ old('digital_methodologies', $data['digital_methodologies'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="digital_methodologies_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('digital_methodologies')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Project management skills -->
                <div class="col-md-12 mb-3">
                    <label>Project management skills (e.g., using collaboration tools, managing tasks)</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="project_management_skills" id="project_management_skills_{{ $i }}" value="{{ $i }}" {{ old('project_management_skills', $data['project_management_skills'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="project_management_skills_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('project_management_skills')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <!-- Emerging technologies -->
                <div class="col-md-12 mb-3">
                    <label>Emerging technologies (e.g., Cloud, AI, Metaverse, Blockchain, IoT)</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="emerging_technologies" id="emerging_technologies_{{ $i }}" value="{{ $i }}" {{ old('emerging_technologies', $data['emerging_technologies'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="emerging_technologies_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('emerging_technologies')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Organizational change management -->
                <div class="col-md-12 mb-3">
                    <label>Organizational Change Management (e.g., change management strategies, stakeholder engagement)</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="organizational_change_management" id="organizational_change_management_{{ $i }}" value="{{ $i }}" {{ old('organizational_change_management', $data['organizational_change_management'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="organizational_change_management_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('organizational_change_management')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Digital Governance -->
            <div class="col-md-12 mb-3">
                <label>Digital Governance (e.g., digital strategies, frameworks, practices)</label>
                <div class="d-flex justify-content-between">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="digital_governance" id="digital_governance_{{ $i }}" value="{{ $i }}" {{ old('digital_governance', $data['digital_governance'] ?? '') == $i ? 'checked' : '' }}>
                            <label class="form-check-label" for="digital_governance_{{ $i }}">{{ $i }}</label>
                        </div>
                    @endfor
                </div>
                @error('digital_governance')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <!-- Software Development -->
                <div class="col-md-12 mb-3">
                    <label>Software Development</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="software_development" id="software_development_{{ $i }}" value="{{ $i }}" {{ old('software_development', $data['software_development'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="software_development_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('software_development')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Data-driven decision-making -->
                <div class="col-md-12 mb-3">
                    <label>Data-driven decision-making</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="data_driven_decision_making" id="data_driven_decision_making_{{ $i }}" value="{{ $i }}" {{ old('data_driven_decision_making', $data['data_driven_decision_making'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="data_driven_decision_making_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('data_driven_decision_making')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <!-- Electronic Document Management -->
                <div class="col-md-12 mb-3">
                    <label>Electronic Document Management</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="electronic_document_management" id="electronic_document_management_{{ $i }}" value="{{ $i }}" {{ old('electronic_document_management', $data['electronic_document_management'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="electronic_document_management_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('electronic_document_management')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- System analysis and design -->
                <div class="col-md-12 mb-3">
                    <label>System analysis and design</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="system_analysis_and_design" id="system_analysis_and_design_{{ $i }}" value="{{ $i }}" {{ old('system_analysis_and_design', $data['system_analysis_and_design'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="system_analysis_and_design_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('system_analysis_and_design')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <!-- Web application design and development -->
                <div class="col-md-12 mb-3">
                    <label>Web application design and development</label>
                    <div class="d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="web_application_design_and_development" id="web_application_design_and_development_{{ $i }}" value="{{ $i }}" {{ old('web_application_design_and_development', $data['web_application_design_and_development'] ?? '') == $i ? 'checked' : '' }}>
                                <label class="form-check-label" for="web_application_design_and_development_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    @error('web_application_design_and_development')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        </div>




        <div class="form-group">
            <div class="row">
                <!-- First Column: AI Usage Dropdown -->

                <div class="col-md-12 mb-3">
                    <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                        23
                    </h5>
                    <label for="ai_use">Have you utilized any Artificial Intelligence (AI) tools or platforms in your current job?
                        <span style="color: red">*</span>
                    </label>
                    <select name="ai_use" class="form-control" required id="ai_use">
                        <option value="">Select Option</option>
                        <option value="Yes" {{ old('ai_use', $data['ai_use'] ?? '') == 'Yes' ? 'selected' : '' }}>Yes</option>
                        <option value="No" {{ old('ai_use', $data['ai_use'] ?? '') == 'No' ? 'selected' : '' }}>No</option>
                        <option value="I dont know" {{ old('ai_use', $data['ai_use'] ?? '') == 'I dont know' ? 'selected' : '' }}>I don't know</option>
                    </select>
                    @error('ai_use')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Second Column: AI Examples Checkboxes -->

                <div class="col-md-12 mb-3" id="example_field" style="display: none;">
                    <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                        24
                    </h5>
                    <label for="example">Can you provide examples of how Artificial Intelligence (AI) has been applied in your job responsibilities?
                        Please select all that apply. <span style="color: red">*</span>
                    </label>
                    <div class="form-check">
                        @foreach($examples as $item)
                            <div class="checkbox mb-2">
                                <input type="checkbox" name="example[]" value="{{ $item->id }}"
                                       class="form-check-input"
                                       id="example_{{ $item->id }}"
                                    {{ (is_array(old('example', $data['example'] ?? [])) && in_array($item->id, old('example', $data['example'] ?? []))) ? 'checked' : '' }}>
                                <label class="form-check-label" for="example_{{ $item->id }}">
                                    {{ $item->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    @error('example')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3" id="other_ai_examples_field" style="display: none;">
                    <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                        25
                    </h5>
                    <label for="other_ai_examples">Please list any other examples of how Artificial Intelligence (AI) has been applied in your job responsibilities, if applicable. If none, please specify N/A.</label>
                    <textarea name="other_ai_examples" id="other_ai_examples" class="form-control" rows="4">{{ old('other_ai_examples', $data['other_ai_examples'] ?? '') }}</textarea>
                    @error('other_ai_examples')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>



        <!-- Navigation Buttons -->
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('business.form.step',1) }}" class="btn btn-secondary">Previous</a>
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
{{--<script>--}}
{{--    function toggleOtherField(selectElement) {--}}
{{--        var otherField = document.getElementById('other_role_field');--}}
{{--        if (selectElement.value === '10') {--}}
{{--            otherField.style.display = 'block';--}}
{{--        } else {--}}
{{--            otherField.style.display = 'none';--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
<script>
    $(document).ready(function() {
        function toggleFields() {
            var selectedValue = $('#role_category').val();

            // Show/Hide the 'other_role_field' based on the value of the dropdown
            if (selectedValue == '10') {  // Change '10' to the correct value for "Other"
                $('#other_role_field').show();
            } else {
                $('#other_role_field').hide();
            }

            // Show/Hide the 'executive' div based on the selected values
            if (['1', '2', '3', '4'].includes(selectedValue)) {
                $('#executive').show();
            } else {
                $('#executive').hide();
            }
        }

        // Handle the change event for the dropdown
        $('#role_category').on('change', function() {
            toggleFields();
        });

        // Trigger change event on page load in case an option was pre-selected
        $('#role_category').trigger('change');
    });
</script>
<script>
    function validateForm() {
        let isValid = true;

        // Clear previous highlights
        document.querySelectorAll('.form-control, .form-select, .form-check-input').forEach(function(element) {
            element.classList.remove('highlight');
            if (element.type === 'radio') {
                element.parentElement.style.color = '';
            }
        });

        // Check required fields
        document.querySelectorAll('[required]').forEach(function(element) {
            if (element.type === 'text' || element.type === 'select-one') {
                if (!element.value) {
                    isValid = false;
                    element.classList.add('highlight');
                }
            } else if (element.type === 'radio') {
                let name = element.name;
                let radioGroup = document.querySelectorAll(`input[name="${name}"]`);
                let isChecked = Array.from(radioGroup).some(radio => radio.checked);
                if (!isChecked) {
                    isValid = false;
                    radioGroup.forEach(radio => {
                        radio.parentElement.style.color = 'red';
                    });
                }
            }
        });

        if (!isValid) {
            alert('Please fill all required fields.');
        }
        return isValid;
    }

    document.querySelector('form').addEventListener('submit', function(event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });
</script>

<script>
    function toggleOtherField(selectElement) {
        var otherField = document.getElementById('other_role_field');
        otherField.style.display = selectElement.value === 'other' ? 'block' : 'none';
    }

    // Initialize the "Other" field visibility based on the current selection
    document.addEventListener('DOMContentLoaded', function() {
        var roleCategory = document.getElementById('role_category');
        toggleOtherField(roleCategory);
    });
</script>
<script>
    $(document).ready(function() {
        function toggleFields() {
            var aiUseValue = $('#ai_use').val();

            // Show/Hide the 'example_field' and 'other_ai_examples_field' based on the value of 'ai_use'
            if (aiUseValue === 'Yes') {
                $('#example_field').show();
                $('#other_ai_examples_field').show();
            } else {
                $('#example_field').hide();
                $('#other_ai_examples_field').hide();
            }
        }

        // Handle the change event for the 'ai_use' dropdown
        $('#ai_use').on('change', function() {
            toggleFields();
        });

        // Trigger change event on page load in case an option was pre-selected
        $('#ai_use').trigger('change');
    });
</script>
<style>
    .highlight {
        border-color: red !important;
    }
</style>

</body>
</html>
