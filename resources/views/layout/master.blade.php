<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    {{--  <div class="wrapper">  --}}
        @include('layout.navbar')
        @include('layout.sidebar')
        @yield('content')
        @include('layout.footer')
</body>
</html>
