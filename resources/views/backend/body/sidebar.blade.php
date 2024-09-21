@php

$user=\App\Models\User::find(\Illuminate\Support\Facades\Auth::user()->id);
@endphp
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminbackend/assets/images/logo-gaa.png') }}" class="logo-icon" alt="logo icon" style="height:40px ;width:60px">
        </div>
        <div>
            <h4 class="logo-text" style="color: green">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">


        @if($user->hasRole('admin'))
            <li>
                <a href="{{ route('backend.dashboard') }}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>
                </li>
                <li> <a href="dashboard-eCommerce.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
                </li>
                <li> <a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
                </li>
                <li> <a href="dashboard-digital-marketing.html"><i class="bx bx-right-arrow-alt"></i>Digital Marketing</a>
                </li>
                <li> <a href="dashboard-human-resources.html"><i class="bx bx-right-arrow-alt"></i>Human Resources</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">User Management</div>
            </a>
            <ul>
                <li> <a href="{{route('all.adminuser')}}"><i class="bx bx-right-arrow-alt"></i>All Users</a>
                </li>
                <li> <a href="{{route('user.add')}}"><i class="bx bx-right-arrow-alt"></i>Add GAA User</a>
                </li>
                <li> <a href="{{route('entity.user')}}"><i class="bx bx-right-arrow-alt"></i>Add Entity User</a>
                </li>
                <li> <a href="app-contact-list.html"><i class="bx bx-right-arrow-alt"></i>Contatcs</a>
                </li>
                <li> <a href="app-to-do.html"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
                </li>
                <li> <a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
                </li>
                <li> <a href="app-fullcalender.html"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
                </li>
            </ul>
        </li>
            <li>
                <a href="{{route('all.entity')}}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Entities</div>
                </a>
            </li>
            <li class="menu-label">Roles And Permission</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-line-chart"></i>
                    </div>
                    <div class="menu-title">Role & Permission</div>
                </a>
                <ul>
                    <li> <a href="{{ route('all.permission') }}"><i class="bx bx-right-arrow-alt"></i>All Permission</a>
                    </li>
                    <li> <a href="{{ route('all.roles') }}"><i class="bx bx-right-arrow-alt"></i>All Roles</a>
                    </li>
                    <li> <a href="{{ route('add.roles.permission') }}"><i class="bx bx-right-arrow-alt"></i>Roles in Permission</a>
                    </li>
                    <li> <a href="{{ route('all.roles.permission') }}"><i class="bx bx-right-arrow-alt"></i>All Roles in Permission</a>
                    </li>

                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                    </div>
                    <div class="menu-title">Constants</div>
                </a>
                <ul>
                    <li> <a href="{{route('all.ministry')}}"><i class="bx bx-right-arrow-alt"></i>Ministries</a>
                    </li>
                    <li> <a href="{{route('all.ratecard')}}"><i class="bx bx-right-arrow-alt"></i>Rate Cards</a>
                    </li>

                    <li> <a href="{{route('all.advertcategory')}}"><i class="bx bx-right-arrow-alt"></i>Advert Categories</a>
                    </li>


                </ul>
            </li>
        @endif
        @if($user->hasRole('advertising'))
                <li>
                    <a href="{{ route('backend.aodashboard') }}">
                        <div class="parent-icon"><i class='bx bx-cookie'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
         <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-repeat"></i>
                </div>
                <div class="menu-title">Print Adverts</div>
            </a>
            <ul>
                <li> <a href="{{route('pending.printapprovals')}}"><i class="bx bx-right-arrow-alt"></i>Pending</a>
                </li>
                <li> <a href="{{route('pending.assigned')}}"><i class="bx bx-right-arrow-alt"></i>Assigned</a>
                </li>
                <li> <a href="{{route('pending.review')}}"><i class="bx bx-right-arrow-alt"></i>From Designer To Client</a>
                </li>
                <li> <a href="{{route('corrections.designer')}}"><i class="bx bx-right-arrow-alt"></i>Returned To Designer</a>
                </li>
                <li> <a href="{{route('pending.client')}}"><i class="bx bx-right-arrow-alt"></i>Awaiting Client</a>
                </li>
                <li> <a href="{{route('printdesign.admitted.advertising')}}"><i class="bx bx-right-arrow-alt"></i>Admitted </a>
                </li>
            </ul>
        </li>

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-repeat"></i>
                        </div>
                        <div class="menu-title">Broadcast Adverts</div>
                    </a>
                    <ul>
                        <li> <a href="{{route('pending.broadcast')}}"><i class="bx bx-right-arrow-alt"></i>Pending Broadcasts</a>
                        <li> <a href="{{route('review.broadcast')}}"><i class="bx bx-right-arrow-alt"></i>My reviewed Broadcasts</a>
                        <li> <a href="{{route('manager.response.broadcast')}}"><i class="bx bx-right-arrow-alt"></i>Responses from Manager</a>

                    </ul>
                </li>






        @endif


            @if($user->hasRole('News Agent'))
                <li>
                    <a href="{{ route('news.dashboard') }}">
                        <div class="parent-icon"><i class='bx bx-cookie'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a class="" href="{{route('editorial.index')}}">
                        <div class="parent-icon"><i class="bx bx-repeat"></i>
                        </div>
                        <div class="menu-title">Editorial Content</div>
                    </a>

                </li>

                <li>
                    <a class="" href="">
                        <div class="parent-icon"><i class="bx bx-trim"></i>
                        </div>
                        <div class="menu-title">Broadcast Adverts</div>
                    </a>

                </li>






            @endif

        @if($user->hasRole('designer'))
                <li>
                    <a href="{{ route('designer.dashboard') }}">
                        <div class="parent-icon"><i class='bx bx-cookie'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-repeat"></i>
                        </div>
                        <div class="menu-title">Print Adverts</div>
                    </a>
                    <ul>
                        <li> <a href="{{route('printdesign.pending')}}"><i class="bx bx-right-arrow-alt"></i>Pending</a>
                        </li>
                        <li> <a href="{{route('printdesign.awaitingfeedback')}}"><i class="bx bx-right-arrow-alt"></i>Awaiting Review</a>
                        </li>
                        <li> <a href="{{route('printdesign.corrections')}}"><i class="bx bx-right-arrow-alt"></i>Awaiting Corrections</a>
                        </li>
                        <li> <a href="{{route('printdesign.clientapproved')}}"><i class="bx bx-right-arrow-alt"></i>Client Approved</a>
                        </li>
                        <li> <a href="{{route('printdesign.admitted')}}"><i class="bx bx-right-arrow-alt"></i>Admitted </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="{{route('mygov.issues')}}" >
                        <div class="parent-icon"><i class='bx bx-cart'></i>
                        </div>
                        <div class="menu-title">MyGov Issues</div>
                    </a>

                </li>
            @endif

            @if($user->hasRole('manager'))
                <li>
                    <a href="{{ route('manager.dashboard') }}">
                        <div class="parent-icon"><i class='bx bx-cookie'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-repeat"></i>
                        </div>
                        <div class="menu-title">Broadcast Adverts</div>
                    </a>
                    <ul>
                        <li> <a href="{{route('manager.pending.broadcast')}}"><i class="bx bx-right-arrow-alt"></i>Pending Broadcasts</a>
                        <li> <a href="{{route('review.broadcast')}}"><i class="bx bx-right-arrow-alt"></i>My reviewed Broadcasts</a>


                    </ul>
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
