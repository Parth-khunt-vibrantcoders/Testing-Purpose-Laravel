<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    @include('backend.includes.header')

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            @include('backend.includes.body_header')
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                @include('backend.includes.menubar')
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        @include('backend.includes.breadcrumb')
                        <div class="page-start">
                            @yield('section')
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            @include('backend.includes.body_footer')
        </div>
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        @include('backend.includes.footer')
    </body>

</html>
