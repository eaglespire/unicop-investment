<div class="vertical-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('admin.home') }}" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{ asset('back/assets/images/logos/logo.png') }}" alt="" height="40">
        </span>
            <span class="logo-lg">
                <img src="{{ asset('back/assets/images/logos/logo.png') }}" alt="" height="40">
            </span>
        </a>

        <a href="{{ route('admin.home') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('back/assets/images/logos/logo.png') }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('back/assets/images/logos/logo.png') }}" alt="" height="40">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('admin.home') }}">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Modules</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-users-alt"></i>
                        <span>User Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.create-new-user') }}">Create New User</a></li>
                        <li><a href="{{ route('admin.read-users-component') }}">Manage Users</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.inbox-component') }}" class="waves-effect">
                        <i class="uil uil-envelope"></i>
                        <span>Inbox</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil uil-money-bill-stack"></i>
                        <span>Loan Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('admin.create-loan-component') }}" class="">New Loan</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.loan-categories-component') }}" class="">Loan Categories</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.loan-subscribers-component') }}" class="">Loan Subscribers</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil uil-save"></i>
                        <span>Manage Investment</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('admin.create-investment-package') }}" class="">New</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.investment-packages') }}" class="">All Packages</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.all-investments') }}" class="">Investments</a>
                        </li>
                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
