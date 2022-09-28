<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.js" crossorigin="anonymous"></script>
</head>

    <style>

        

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0px !important;
        margin: 0px !important;
    }

    div.dataTables_wrapper div.dataTables_length select {
        width: 80px;
    }

       
    </style>

    <style>
        .post-code-bg {
            width: fit-content ;
            min-width: 100% !important;
            background-color: #212121 !important;
            width: 100% !important;
            overflow-x: scroll !important;  
            position: relative;
            padding: 1rem 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
    </style>

<body>


    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
        
        @include('layouts.inc.admin-sidebar')

        <div id="layoutSidenav_content">
            <main>
                
                @yield('content')

            </main>

            @include('layouts.inc.admin-footer')

        </div>


    </div>

    
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#your_summernote").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready( function () {
            $('#myDataTable').DataTable();
        });
    </script>

    @yield('scripts')


</body>
</html>