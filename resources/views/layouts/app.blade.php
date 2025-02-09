<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE with Chart.js</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <div class="content-wrapper">
            <section class="content pt-3">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        <!-- Footer -->
        @include('layouts.footer')
        @stack('scripts')
    </div>
</body>
</html>