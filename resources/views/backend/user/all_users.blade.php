@extends('backend.backend_dashboard')
@section('backend')

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
                    <a href="{{route('user.add')}}" style="float:right;" class="btn btn-round btn-success mb-5">Add User</a>

                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <hr/>
        <div class="card">
            <div class="card-body">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Official Names</th>

                            <th>Email</th>
                            <th>Phone Number</th>

                            <th>Role</th>
                            <th>Code</th>
                            <th >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{$item->name}}</td>

                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>

                                <td>{{ $item->roles->first()->name ?? 'No Role Assigned' }}</td>

                                <td>{{$item->code}}</td>

                                <td>
                                    <a href="{{route('user.edit',$item->id)}}"  class="btn btn-info">Edit</a>
                                    {{--                                    <a href="{{route('user.delete', $user->id)}}"  id="delete" class="btn btn-danger">Delete</a>--}}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                        <tfoot>
                        <tr>
                            <th>SL</th>
                            <th>Official Names</th>

                            <th>Email</th>
                            <th>Phone Number</th>

                            <th>Role</th>
                            <th>Code</th>
                            <th >Action</th>

                        </tr>
                        </tfoot>
                    </table>
                </div>

        </div>



    </div>


@endsection
