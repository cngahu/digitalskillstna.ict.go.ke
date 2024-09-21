@extends('backend.admin_dashboard')
@section('admin')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">All Users</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Users</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
{{--                    <a href="{{route('user.add')}}" style="float:right;" class="btn btn-round btn-success mb-5">Add User</a>--}}

                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <hr/>
        <div class="card">
            <div class="card-body">
                <table id="scroll-horizontal-datatable" class="table w-100 nowrap dataTable no-footer" aria-describedby="scroll-horizontal-datatable_info" style="width: 2680px;">
{{--                <table id="example" class="table table-striped table-bordered" style="width:100%">--}}
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Type</th>
                        <th>First Name</th>
                        <th>Other Names</th>
                        <th>Other Names</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Summary Feedback</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stakeholder as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{$item->type}}</td>
                            <td>{{$item->first_name}}</td>
                            <td>{{$item->other_name}}</td>
                            <td>{{$item->organization_name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{!! $item->summary_feedback !!}</td>



                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Type</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Other Names</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Summary Feedback</th>


                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>



    </div>


@endsection
