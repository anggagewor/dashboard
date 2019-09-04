
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{public_dashboard('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{public_dashboard('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{public_dashboard('css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{public_dashboard('css/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{public_dashboard('css/bootadmin.min.css')}}">
    <link rel="stylesheet" href="{{public_dashboard('css/custom.css')}}">
    @stack('head_style')
    <title>{{config('app.name')}}</title>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand navbar-dark bg-wp">
        <a class="navbar-brand ml-3" href="{{url('dashboard')}}">
            <i class="fas fa-mountains"></i>
            {{config('app.name')}}
        </a>
        <div class="navbar-collapse collapse">
            {!!\Modules\Dashboard\Components\Menu\Facades\Menu::render('navbar-left.dashboard')!!}
            {!!\Modules\Dashboard\Components\Menu\Facades\Menu::render('navbar-right.dashboard')!!}
        </div>
    </nav>

    <div class="d-flex">
        <div class="sidebar sidebar-dark bg-wp">
            {!!\Modules\Dashboard\Components\Menu\Facades\Menu::render('sidebar.dashboard')!!}
        </div>

        <div class="content p-4">
            <div style="min-height: 900px" class="">
                @yield('content')
            </div>
            <hr>
            <footer id="sticky-footer" class="">
                <div class="row">
                    <div class="col-md-6">
                        Thank you for creating with <a href="">Sawah Rangru</a>.
                    </div>
                    <div class="col-md-6 text-right">
                        Version 1.6.0219
                    </div>
                </div>
            </footer>
        </div>
    </div>

<script src="{{(public_dashboard('js/jquery.min.js'))}}"></script>
<script src="{{(public_dashboard('js/bootstrap.bundle.min.js'))}}"></script>
<script src="{{(public_dashboard('js/datatables.min.js'))}}"></script>
<script src="{{(public_dashboard('js/moment.min.js'))}}"></script>
<script src="{{(public_dashboard('js/fullcalendar.min.js'))}}"></script>
<script src="{{(public_dashboard('js/all.min.js'))}}"></script>
<script src="{{(public_dashboard('js/bootadmin.min.js'))}}"></script>
@stack('foot_script')
</body>
</html>