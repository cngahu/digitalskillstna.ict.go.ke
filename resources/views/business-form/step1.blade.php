<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Form - Step 1</title>
    <!-- Bootstrap CSS for quick styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f4f6f9;
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

        .progress {
            height: 25px;
        }

        .progress-bar {
            background-color: #007bff;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .text-danger {
            font-size: 0.875rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Ministry of Information Communication and the Digital Economy</a>
    <small style="color: whitesmoke">Public Sector
        Digital Skills
        Baseline Assessment</small>
    </div>
</nav>

<!-- Main Content -->
<div class="container">
    <h2>Stage 1: DEMOGRAPHICS</h2>

    <!-- Progress Bar -->
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
            Step 1 of 5
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
    <!-- Form -->
    <form action="{{ route('business.form.store') }}" method="POST" id="step1Form">
        @csrf
        <input type="hidden" name="step" value="1">

        <!-- Name Field -->
        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
            1
        </h5>
        <div class="form-group">
            <label for="name">What is your full name?[First and Last Name]  <span style="color: red">*</span></label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $data['name'] ?? '') }}" required>
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Age Range Dropdown -->
        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
          2
        </h5>
        <div class="form-group">
            <label for="age_range">Age: [Select your age range] <span style="color: red">*</span> </label>
            <select name="age_range" class="form-control" required>
                <option value="">Select Age Range</option>
                @foreach($ageRanges as $ageRange)
                    <option value="{{ $ageRange->id }}" {{ old('age_range', $data['age_range'] ?? '') == $ageRange->id ? 'selected' : '' }}>{{ $ageRange->name }}</option>
                @endforeach
            </select>
            @error('age_range')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Gender Dropdown -->
        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
            3
        </h5>
        <div class="form-group">
            <label for="gender">Gender: [Select your gender] <span style="color: red">*</span>           </label>
            <select name="gender" class="form-control" required>
                <option value="">Select Gender</option>
                @foreach($genders as $gender)
                    <option value="{{ $gender->id }}" {{ old('gender', $data['gender'] ?? '') == $gender->id ? 'selected' : '' }}>{{ $gender->name }}</option>
                @endforeach
            </select>
            @error('gender')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>



        <!-- Highest Level of Education Dropdown -->
        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
            4
        </h5>
        <div class="form-group">
            <label for="education_level">Education: [Select your highest level of completed education] <span style="color: red">*</span> </label>
            <select name="education_level" class="form-control" id="education_level" required>
                <option value="">Select Education Level</option>
                @foreach($educationLevels as $level)
                    <option value="{{ $level->id }}" {{ old('education_level', $data['education_level'] ?? '') == $level->id ? 'selected' : '' }}>{{ $level->name }}</option>
                @endforeach
            </select>
            @error('education_level')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Conditional 'Other' Field for Education -->

        <div class="form-group" id="other_education_level" style="display: none;">
            <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                5
            </h5>
            <label for="other_education">Please specify your highest level of completed education. <span style="color: red">*</span></label>
            <input type="text" name="other_education" class="form-control" value="{{ old('other_education', $data['other_education'] ?? '') }}">
        </div>


        <!-- Level of Government Dropdown -->
        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
            6
        </h5>
        <div class="form-group">
            <label for="level_of_government">Which level of Government do you work for? <span style="color: red">*</span></label>
            <select name="level_of_government" class="form-control" required id="level_of_government">
                <option value="">Select Level of Government</option>
                <option value="national" {{ old('level_of_government', $data['level_of_government'] ?? '') == 'national' ? 'selected' : '' }}>National Government</option>
                <option value="county" {{ old('level_of_government', $data['level_of_government'] ?? '') == 'county' ? 'selected' : '' }}>County Government</option>
            </select>
            @error('level_of_government')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- County Dropdown (initially hidden) -->

        <div class="form-group" id="county_div" style="display: none;">
            <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                7
            </h5>
            <label for="county">Please select your County: <span style="color: red">*</span> </label>
            <select name="county" class="form-control" id="county" >
                <option value="">Select County</option>
                @foreach($county as $level)
                    <option value="{{ $level->id }}" {{ old('county', $data['county'] ?? '') == $level->id ? 'selected' : '' }}>{{ $level->name }}</option>
                @endforeach
            </select>
            @error('county')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Organization Type Dropdown (initially hidden) -->

        <div class="form-group" id="organization_type_div" style="display: none;">
            <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                8
            </h5>
            <label for="organization_type">Which organization/office do you belong to? <span style="color: red">*</span> </label>
            <select name="organization_type" class="form-control" id="organization_type" >
                <option value="">Select Organization</option>
                @foreach($organizations as $item)
                    <option value="{{ $item->id }}" {{ old('organization_type', $data['organization_type'] ?? '') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>
            @error('organization_type')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Institution Type Dropdown (initially hidden) -->

        <div class="form-group" id="institution_type_div" style="display: none;">
            <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                9
            </h5>
            <label for="institution_type">Which Office do you belong to? <span style="color: red">*</span> </label>
            <select name="institution_type" class="form-control" id="institution_type" >
                <option value="">Select Type of Organization</option>
                <!-- Options will be dynamically populated -->
            </select>
            @error('institution_type')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <!-- Current Job Title -->
        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
            10
        </h5>
        <div class="form-group">
            <label for="job_title">Current Job Title:</label>
            <input type="text" name="job_title" class="form-control" value="{{ old('job_title', $data['job_title'] ?? '') }}" required>
            @error('job_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Disability Field -->
        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
            11
        </h5>
        <div class="form-group">
            <label>Do you have a disability?</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="disability" value="no" id="disability_no" {{ old('disability', $data['disability'] ?? '') == 'no' ? 'checked' : '' }} required>
                <label class="form-check-label" for="disability_no">No</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="disability" value="yes" id="disability_yes" {{ old('disability', $data['disability'] ?? '') == 'yes' ? 'checked' : '' }} required>
                <label class="form-check-label" for="disability_yes">Yes</label>
            </div>
            @error('disability')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Conditional Disability Description -->

        <div class="form-group" id="disability_description" style="display: none;">
            <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                12
            </h5>
            <label for="disability_details">Please describe your disability:</label>
            <input type="text" name="disability_details" class="form-control" value="{{ old('disability_details', $data['disability_details'] ?? '') }}">
        </div>

        <!-- Form Buttons -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </form>
</div>

<!-- Add JavaScript for dynamic form interactions -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Show or hide the "Other" education level input
        $('#education_level').on('change', function() {
            if ($(this).val() == 7) {
                $('#other_education_level').show();
            } else {
                $('#other_education_level').hide();
            }
        });

        // Show or hide the disability description input
        $('input[name="disability"]').on('change', function() {
            if ($(this).val() == 'yes') {
                $('#disability_description').show();
            } else {
                $('#disability_description').hide();
            }
        });

        // Populate institution types based on selected government level (AJAX example)
        $('#organization_type').on('change', function() {
            var level = $(this).val();
            var institutionSelect = $('#institution_type');
            institutionSelect.empty();
            institutionSelect.append('<option value="">Select Type of Institution</option>');

            // Example AJAX call to fetch institution types based on government level
            $.ajax({
                url: '/get-institutions',
                type: 'GET',
                data: { level: level },
                success: function(response) {
                    response.institutions.forEach(function(institution) {
                        institutionSelect.append('<option value="' + institution.id + '">' + institution.name + '</option>');
                    });
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Initially hide or show the divs based on pre-selected value
        toggleFieldsBasedOnGovernment();

        // When the level of government changes
        $('#level_of_government').change(function() {
            toggleFieldsBasedOnGovernment();
        });

        // Function to toggle visibility
        function toggleFieldsBasedOnGovernment() {
            var level = $('#level_of_government').val();

            if (level === 'national') {
                // Show organization and institution type, hide county
                $('#organization_type_div').show();
                $('#institution_type_div').show();
                $('#county_div').hide();
                $('#county').val('');  // Clear county selection
            } else if (level === 'county') {
                // Show county, hide organization and institution type
                $('#county_div').show();
                $('#organization_type_div').hide();
                $('#institution_type_div').hide();
                $('#organization_type, #institution_type').val('');  // Clear organization and institution selection
            } else {
                // Hide all if no selection
                $('#county_div, #organization_type_div, #institution_type_div').hide();
                $('#county, #organization_type, #institution_type').val('');  // Clear all selections
            }
        }
    });
</script>
</body>
</html>
