@include('includes.newBack.head')
<body class="left-side-menu-dark">
<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    @include('includes.newBack.topBar')
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    @include('includes.newBack.leftBar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">{{ ucfirst(\App\Helpers::generatePageTitle()) }}</h4>
                    </div>

                </div>
                {{ $slot }}
            </div>
        </div> <!-- content -->



        <!-- Footer Start -->
        @include('includes.newBack.footer')
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

@include('includes.newBack.foot')
