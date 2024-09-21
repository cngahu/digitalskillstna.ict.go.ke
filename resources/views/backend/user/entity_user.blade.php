@extends('backend.backend_dashboard')
@section('backend')
    <div class="page-content">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add Entity User</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Entity User Creation</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto"></div>
        </div>
        <!--end breadcrumb-->
        <div class="card border-top border-left border-0 border-4 border-success">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-user me-1 font-22 text-info"></i></div>
                    <h5 class="mb-0" style="font-size:large">Create Entity System Users</h5>
                </div>
                <hr>
                <form id="myForm" method="post" action="{{ route('user.entity.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="firstName" class="form-label" style="font-size:large">Official Names<span style="color: red;">*</span></label>
                                <input type="text" name="name" class="form-control" id="firstName" placeholder="Enter First Name"  />
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="staffEmail" class="form-label" style="font-size:large">Staff Email<span style="color: red;">*</span></label>
                                <input type="email" name="email" class="form-control" id="staffEmail" placeholder="Enter Email"  />
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">


                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="phone" class="form-label" style="font-size:large">Phone Number<span style="color: red;">*</span></label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number"  />
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="role" class="form-label" style="font-size:large">User Type<span style="color: red;">*</span></label>
                                <select name="role" id="role" class="form-control" >
                                    <option value="" selected disabled>Select User Type</option>

                                    @foreach($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="ministry" class="form-label" style="font-size:large">Entity<span style="color: red;">*</span></label>
                                <select name="entity" id="entity"  class="form-control">

                                    <option value="" selected disabled>Select Entity</option>
                                    @foreach($entity as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('entity')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="payrollnumber" class="form-label" style="font-size:large">Personal Number<span style="color: red;">*</span></label>
                                <input type="text" name="payrollnumber" class="form-control" id="payrollnumber" placeholder="Personal Number"  />
                                @error('payrollnumber')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror


                            </div>
                        </div>

                    </div>



                    <div class="col-12">
                        <button type="submit" style="width: 100%; font-size:large" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
