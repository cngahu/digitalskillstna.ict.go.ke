@extends('backend.backend_dashboard')
@section('backend')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add New User </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">User Creation </li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">

            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card border-top border-left  border-0 border-4 border-success">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                    </div>
                    <h5 class="mb-0 "style="font-size:large">Edit User</h5>
                </div>
                <hr>
                <form class="row g-3" id="myForm" method="post" action="{{route('user.update',$useredit->id)}}"  >
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                            <label for="inputLastName2" class="form-label" style="font-size:large">First Name</label>

                                <input type="text" name="name"  class="form-control border-start-0" id="inputLastName2" disabled style="background-color:#DCDAD1"  value="{{$useredit->name}}" placeholder="Enter First Name" />
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                            <label for="inputLastName2" class="form-label" style="font-size:large">Middle Name</label>

                                <input type="text" name="middle_name"  class="form-control border-start-0" id="inputLastName2" value="{{$useredit->middle_name}}"  placeholder="Enter Middle Name" />
                                @error('middle_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                            <label for="inputLastName2" class="form-label" style="font-size:large">Other Names</label>
                                <input type="text" name="other_names"  class="form-control border-start-0" id="inputLastName2" value="{{$useredit->other_names}}" placeholder="Enter Other Name" />
                                @error('other_names')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group mb-3">
                            <label for="inputLastName2" class="form-label" style="font-size:large" >Staff Email</label>
                                <input type="email" name="email"  class="form-control border-start-0" id="inputLastName2" value="{{ $useredit->email }}" disabled style="background-color:#DCDAD1" placeholder="Enter Email" />
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                            <label for="inputLastName2" class="form-label" style="font-size:large" > Phone Number</label>

                                <input type="number" name="phone"  class="form-control border-start-0" id="inputLastName2" value="{{ $useredit->phone }}" placeholder="Enter Phone Number" />
                                @error('phone')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                            <label for="inputLastName2" class="form-label" style="font-size:large" >Staff Number</label>
                                <select name="ministry_id" id="country-dropdown" required="" class="form-control">
                                    <option value="" selected="" disabled=""> Ministry</option>
                                    @foreach($ministry as $min)
                                        <option value="{{ $min->id }}" {{ $min->id == $useredit->ministry_id ? 'selected' : ''  }} >{{ $min->ministry_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                            <label for="inputLastName2" class="form-label" style="font-size:large" > ID Number</label>
                                <input type="number" name="idnumber"  class="form-control border-start-0" id="inputLastName2" value="{{ $useredit->idnumber }}" placeholder="Enter Id Number" />
                                @error('idnumber')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                            <label for="inputLastName2" class="form-label" style="font-size:large" > Payroll Number</label>
                                <input type="number" name="payrollnumber"  class="form-control border-start-0" id="inputLastName2" value="{{ $useredit->payrollnumber }}"   placeholder="Payroll Number" />
                                @error('payrollnumber')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>


                    </div>

                    <div class="col-12">
                        <button type="submit" style="width: 100%" class="btn btn-success " style="font-size:large">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
