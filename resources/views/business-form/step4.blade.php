<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 4 - Understanding the need for digital skill        training</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Styles for the header and form */
        .form-header {
            background-color: #0056b3;
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
            font-weight: normal;
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
    <h3>Stage 4: Understanding the need for digital skill       training</h3>
    <!-- Progress Bar -->
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
            Step 4 of 5
        </div>
    </div>
    @php
    $trainings=\App\Models\Training::latest()->get();
     $skill_improves=\App\Models\SkillImprove::latest()->get();
         $challenges=\App\Models\Challenge::latest()->get();
           $digital_tools=\App\Models\DigitalTool::latest()->get();
            $devices=\App\Models\Device::latest()->get();


    @endphp


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
        <input type="hidden" name="step" value="4">

        <h5>44</h5>
        <!-- Question: Formal Training Areas -->
        <div class="col-md-12 mb-3">
            <label for="formal_training">Have you undergone any formal training in the following areas?
                Please select all that apply. <span style="color: red">*</span>
            </label>
            <div class="form-check">
                @foreach($trainings as $training)
                    <div class="form-check mb-2">
                        <input type="checkbox" name="formal_training[]" value="{{ $training->id }}"
                               class="form-check-input"
                               id="training_{{ $training->id }}"
                            {{ (is_array(old('formal_training', $data['formal_training'] ?? [])) && in_array($training->id, old('formal_training', $data['formal_training'] ?? []))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="training_{{ $training->id }}">
                            {{ $training->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            @error('formal_training')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>








        <h5>45</h5>
        <div class="col-md-12 mb-3">
            <label for="additional_training">Please list any additional formal digital training you've undergone that were not mentioned in the previous question. If there are none, please enter N/A.</label>
            <textarea name="additional_training" id="additional_training" rows="4" class="form-control"
                      placeholder="List any additional training or enter N/A if not applicable">{{ old('additional_training', $data['additional_training'] ?? '') }}</textarea>
            @error('additional_training')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5>46</h5>
        <div class="col-md-12 mb-3">
            <label for="skill_improvements">In your opinion, how do you think digital and AI skills can help improve public service delivery in Kenya? Please select all that apply. <span style="color: red">*</span></label>
            <div class="form-check">
                @foreach($skill_improves as $item)
                    <div class="checkbox mb-2">
                        <input type="checkbox" name="skill_improvements[]" value="{{ $item->id }}"
                               class="form-check-input"
                               id="skill_improvement_{{ $item->id }}"
                            {{ (is_array(old('skill_improvements', $data['skill_improvements'] ?? [])) && in_array($item->id, old('skill_improvements', $data['skill_improvements'] ?? []))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="skill_improvement_{{ $item->id }}">
                            {{ $item->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            @error('skill_improvements')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5>47</h5>
        <div class="col-md-12 mb-3">
            <label for="additional_ways">Please list any additional ways in which you believe AI skills can help improve public service delivery in Kenya. If there are none, please enter N/A</label>
            <textarea name="additional_ways" id="additional_ways" rows="4" class="form-control"
                      placeholder="List any additional ways or enter N/A if not applicable">{{ old('additional_ways', $data['additional_ways'] ?? '') }}</textarea>
            @error('additional_ways')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5>48</h5>
        <div class="col-md-12 mb-3">
            <label for="challenges">Highlight some of the challenges preventing you from using ICT skills in your work. Please select all that apply. <span style="color: red">*</span></label>
            <div class="form-check">
                @foreach($challenges as $item)
                    <div class="checkbox mb-2">
                        <input type="checkbox" name="challenges[]" value="{{ $item->id }}"
                               class="form-check-input"
                               id="challenge_{{ $item->id }}"
                            {{ (is_array(old('challenges', $data['challenges'] ?? [])) && in_array($item->id, old('challenges', $data['challenges'] ?? []))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="challenge_{{ $item->id }}">
                            {{ $item->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            @error('challenges')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5>49</h5>
        <div class="col-md-12 mb-3">
            <label for="additional_challenges">Please list any additional challenges preventing you from using ICT skills that were not mentioned in the previous question. If there are none, please enter N/A. <span style="color: red">*</span></label>
            <input type="text" name="additional_challenges" id="additional_challenges"
                   class="form-control"
                   value="{{ old('additional_challenges', $data['additional_challenges'] ?? '') }}">
            @error('additional_challenges')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5>50</h5>
        <div class="col-md-12 mb-3">
            <label for="digital_tools">What digital tools and platforms do you currently use in your role? Please select all that apply. <span style="color: red">*</span></label>
            <div class="form-check">
                @foreach($digital_tools as $tool)
                    <div class="checkbox mb-2">
                        <input type="checkbox" name="digital_tools[]" value="{{ $tool->id }}"
                               class="form-check-input"
                               id="digital_tool_{{ $tool->id }}"
                            {{ (is_array(old('digital_tools', $data['digital_tools'] ?? [])) && in_array($tool->id, old('digital_tools', $data['digital_tools'] ?? []))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="digital_tool_{{ $tool->id }}">
                            {{ $tool->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            @error('digital_tools')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5>51</h5>
        <div class="col-md-12 mb-3">
            <label for="additional_tools">Please list any additional digital tools or platforms you currently use in your role that were not mentioned in the previous question. If there are none, please enter N/A. <span style="color: red">*</span></label>
            <input type="text" name="additional_tools" id="additional_tools"
                   class="form-control"
                   value="{{ old('additional_tools', $data['additional_tools'] ?? '') }}">
            @error('additional_tools')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5>52</h5>
        <div class="col-md-12 mb-3">
            <label for="devices">Which of the following digital devices do you most frequently use to perform your work-related tasks? <span style="color: red">*</span></label>
            <div class="form-check">
                @foreach($devices as $device)
                    <div class="checkbox mb-2">
                        <input type="checkbox" name="devices[]" value="{{ $device->id }}"
                               class="form-check-input"
                               id="device_{{ $device->id }}"
                            {{ (is_array(old('devices', $data['devices'] ?? [])) && in_array($device->id, old('devices', $data['devices'] ?? []))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="device_{{ $device->id }}">
                            {{ $device->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            @error('devices')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>















        <!-- Navigation Buttons -->
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('business.form.step',3) }}" class="btn btn-secondary">Previous</a>
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function toggleOtherField(selectElement) {
        var otherField = document.getElementById('other_role_field');
        if (selectElement.value === '10') {
            otherField.style.display = 'block';
        } else {
            otherField.style.display = 'none';
        }
    }
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

<style>
    .highlight {
        border-color: red !important;
    }
</style>

</body>
</html>
