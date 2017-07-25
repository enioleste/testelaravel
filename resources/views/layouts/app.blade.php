<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $pageTitle or "" }} {{ config('app.name', 'Averbweb') }}</title>

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset("/assets/bootstrap/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    <!-- Inclui as folhas de estilo da página -->
    @yield('pageStyleSheets')

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/assets/dist/css/AdminLTE-full.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/dist/css/skins/skin-blue-light.css") }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue-light">
    <div class="wrapper">
        <!-- Main Header -->
        <!-- Header -->
        @include('layouts.header')

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('title')
                </h1>
                <!-- You can dynamically generate breadcrumbs here -->
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="fa fa-dashboard"></i> Início
                        </a>
                    </li>
                    @if (isset($pageBreadcrumb) && $pageBreadcrumb != "Home")
                    <li class="active">
                        {{ $pageBreadcrumb or null }}
                    </li>
                    @endif
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <!-- Main Footer -->
        @include('layouts.footer')
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src="{{ asset ("/assets/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("/assets/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

    <!-- Incui os scripts especificos da página -->
    @yield('pageScripts')

     <!-- AdminLTE App -->
    <script src="{{ asset ("/assets/dist/js/app.min.js") }}" type="text/javascript"></script>

</body>

</html>