@include('includes.back.head')

<!-- Begin page -->
<div id="layout-wrapper">
    @include('includes.back.header')
    <!-- ========== Left Sidebar Start ========== -->
    @include('includes.back.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">{{ ucfirst(request()->segment(2)) }}</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ ucfirst(request()->segment(2)) }}</a></li>
                                    <li class="breadcrumb-item active">{{ ucfirst(request()->segment(3)) ?? null }}</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                {{ $slot }}
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        @include('includes.back.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

@include('includes.back.foot')
