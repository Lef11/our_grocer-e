<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="back-end/css/themify-icons.css">
  <link rel="stylesheet" href="back-end/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="back-end/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="back-end/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="back-end/images/logo_2H_tech.png" />
</head>
<body>
<!-- container-scroller start -->
<div class="container-scroller">
    {{-- Top NAVBAR --}}
    @include('admin-sidebar.navbar-top')
    <div class="container-fluid page-body-wrapper">
    {{-- Left-Side NAVBAR --}}
    @include('admin-sidebar.navbar-left')
        <div class="main-panel">
            <div class="content-wrapper">
                {{-- YIELD Content --}}
                @yield('content')
            </div>
            <!-- content-wrapper ends -->

            {{-- Admin FOOTER --}}
            @include('include.admin-footer')
        </div>
    <!-- main-panel ends -->
    </div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller end -->

<!-- plugins:js -->
<script src="back-end/js/vendor.bundle.base.js"></script>
<script src="back-end/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="back-end/js/off-canvas.js"></script>
<script src="back-end/js/hoverable-collapse.js"></script>
<script src="back-end/js/template.js"></script>
<script src="back-end/js/settings.js"></script>
<script src="back-end/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
    @yield('scripts')
<!-- End custom js for this page-->
</body>

</html>
