@php

$user=\App\Models\User::find(\Illuminate\Support\Facades\Auth::user()->id);
@endphp
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminbackend/assets/images/gaa.png') }}" class="logo-icon" alt="logo icon" width="600" >
        </div>
        <div>
            <h4 class="logo-text" style="color: green">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">


        @if($user->role='admin')
            <li>
                <a href="{{ route('backend.dashboard') }}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
        <li>
{{--            <a href="javascript:;" class="has-arrow">--}}
{{--                <div class="parent-icon"><i class='bx bx-home-circle'></i>--}}
{{--                </div>--}}
{{--                <div class="menu-title">Dashboard</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>--}}
{{--                </li>--}}
{{--                <li> <a href="dashboard-eCommerce.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>--}}
{{--                </li>--}}
{{--                <li> <a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i>Analytics</a>--}}
{{--                </li>--}}
{{--                <li> <a href="dashboard-digital-marketing.html"><i class="bx bx-right-arrow-alt"></i>Digital Marketing</a>--}}
{{--                </li>--}}
{{--                <li> <a href="dashboard-human-resources.html"><i class="bx bx-right-arrow-alt"></i>Human Resources</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

            <li>
                <a href="">
                    <div class="parent-icon"><i class='bx bx-user-circle'></i>
                    </div>
                    <div class="menu-title">Users</div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="parent-icon"><i class='bx bx-disc'></i>
                    </div>
                    <div class="menu-title">Responses</div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Institutions</div>
                </a>
            </li>

            <li>
{{--                {{route('all.entity')}}--}}
                <a href="">
                    <div class="parent-icon"><i class='bx bx-book-content'></i>
                    </div>
                    <div class="menu-title">Entities</div>
                </a>
            </li>




        @endif


        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
