@extends('backend.backend_dashboard')

@section('backend')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <div class="page-content">

        <!-- Dashboard Header -->
        <h4 class="mb-4">Survey Submissions Dashboard</h4>

        <!-- Metrics Overview -->
        <div class="row">
            <div class="col">
                <div class="card radius-10 bg-gradient-deepblue">
                    <div class="card-body">
                        <h5 class="mb-0 text-white">{{ $totalSubmissions }}</h5>
                        <p class="mb-0 text-white">Total Submissions</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <h5 class="mb-0 text-white"></h5>
                        <p class="mb-0 text-white">Submissions by Age Range</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <h5 class="mb-0 text-white">{{ $submissionsByEducationLevel }}</h5>
                        <p class="mb-0 text-white">Submissions by Education Level</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <div id="ageChart" style="height: 400px;"></div>
            </div>

        </div>
        <p></p>
        <div class="row">

            <div class="col">
                <div id="genderChart" style="width:100%; height:400px;"></div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div id="educationChart" style="width:100%; height:400px;"></div>
            </div>
        </div>


        <!-- Digital Skills Summary -->
        <div class="row">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <h5 class="mb-0">Digital Skills Overview</h5>
                        <canvas id="skillsChart"></canvas> <!-- Chart placeholder -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Submissions Table -->
        <div class="card radius-10">
            <div class="card-body">
                <h5 class="mb-0">Recent Submissions</h5>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Age Range</th>
                            <th>Gender</th>
                            <th>Education Level</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recentSubmissions as $submission)
                            <tr>
                                <td>#{{ $loop->iteration }}</td>
                                <td>{{ $submission->name }}</td>
                                <td>{{ $submission->age_range }}</td>
                                <td>{{ $submission->gender }}</td>
                                <td>{{ $submission->education_level }}</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Highcharts.chart('ageChart', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Submissions by Age Range'
                    },
                    xAxis: {
                        categories: {!! json_encode(array_keys($submissionsByAge)) !!}, // Age range names
                        crosshair: true
                    },
                    yAxis: {
                        min: 0, // Minimum value
                        title: {
                            text: 'Number of Submissions'
                        },
                        allowDecimals: false, // Prevent decimal values
                        tickInterval: 1 // Set tick interval to 1 for whole numbers
                    },
                    tooltip: {
                        valueSuffix: ''
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Submissions',
                        data: {!! json_encode(array_values($submissionsByAge)) !!} // Counts
                    }]
                });
            });


            document.addEventListener('DOMContentLoaded', function () {
                Highcharts.chart('genderChart', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Submissions by Gender'
                    },
                    xAxis: {
                        categories: ['Female', 'Male', 'Prefer Not to Say'],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Number of Submissions'
                        },
                        allowDecimals: false,
                        tickInterval: 1
                    },
                    tooltip: {
                        valueSuffix: ''
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Submissions',
                        data: [
                            {{ $genderCounts['female'] }},
                            {{ $genderCounts['male'] }},
                            {{ $genderCounts['prefer_not_to_say'] }}
                        ]
                    }]
                });
            });



        </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Education Chart Script Loaded'); // This will help ensure that the script is running

            // Ensure categories and data are set properly
            const categories = [
                @foreach($educationLevels as $level)
                    '{{ $level->name }}'{{ !$loop->last ? ',' : '' }}
                    @endforeach
            ];
            const data = [
                @foreach($educationLevels as $level)
                    {{ $educationCounts[$level->id] }}{{ !$loop->last ? ',' : '' }}
                    @endforeach
            ];
            console.log('Categories:', categories); // Debugging categories
            console.log('Data:', data); // Debugging data

            Highcharts.chart('educationChart', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Submissions by Education Level'
                },
                xAxis: {
                    categories: categories,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Number of Submissions'
                    },
                    allowDecimals: false,
                    tickInterval: 1
                },
                tooltip: {
                    valueSuffix: ''
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Submissions',
                    data: data
                }]
            });
        });
    </script>

@endsection
