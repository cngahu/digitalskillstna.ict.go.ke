<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 5 - Identifying Interventions    </title>
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


    <h3>Stage 5: Identifying Interventions    </h3>
    <!-- Progress Bar -->
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 94%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
            Step 5 of 5
        </div>
    </div>
    @php
        $training_formats=\App\Models\TrainingFormat::latest()->get();
         $frequencies=\App\Models\TrainingFrequency::latest()->get();



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
        <input type="hidden" name="step" value="5">

        <h5>53</h5>
        <div class="col-md-12 mb-3">
            <label for="training_formats">What format of training would you personally prefer? [Please select all that apply]<span style="color: red">*</span></label>
            <div class="form-check">
                @foreach($training_formats as $format)
                    <div class="checkbox mb-2">
                        <input type="checkbox" name="training_formats[]" value="{{ $format->id }}"
                               class="form-check-input"
                               id="training_format_{{ $format->id }}"
                            {{ (is_array(old('training_formats', $data['training_formats'] ?? [])) && in_array($format->id, old('training_formats', $data['training_formats'] ?? []))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="training_format_{{ $format->id }}">
                            {{ $format->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            @error('training_formats')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5>54</h5>
        <div class="col-md-12 mb-3">
            <label for="training_frequency">How often would you personally prefer to participate in digital training?
                Please select all that apply. <span style="color: red">*</span>
            </label>
            <div class="form-check">
                @foreach($frequencies as $frequency)
                    <div class="form-check mb-2">
                        <input type="checkbox" name="training_frequency[]" value="{{ $frequency->id }}"
                               class="form-check-input"
                               id="frequency_{{ $frequency->id }}"
                            {{ (is_array(old('training_frequency', $data['training_frequency'] ?? [])) && in_array($frequency->id, old('training_frequency', $data['training_frequency'] ?? []))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="frequency_{{ $frequency->id }}">
                            {{ $frequency->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            @error('training_frequency')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5>55</h5>

        <div class="col-md-12 mb-3">
            <label for="additional_insights">Is there anything else you would like to share or any additional insights you believe are important for us to consider?</label>
            <textarea name="additional_insights" id="additional_insights" class="form-control" rows="4">{{ old('additional_insights', $data['additional_insights'] ?? '') }}</textarea>
            @error('additional_insights')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>















        <!-- Navigation Buttons -->
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('business.form.step',4) }}" class="btn btn-secondary">Previous</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




<style>
    .highlight {
        border-color: red !important;
    }
</style>

</body>
</html>
