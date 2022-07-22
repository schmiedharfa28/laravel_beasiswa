<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- tambahkan jquery --}}
    <link rel="stylesheet" href="{{ asset('mazer/dist/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/dist/assets/vendors/jquery/jquery.min.js') }}">

<link rel="stylesheet" href="{{ asset('mazer/dist/assets/vendors/iconly/bold.css') }}">


    <link rel="stylesheet" href="{{ asset('mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{  asset('mazer/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/dist/assets/css/app.css') }}">

  {{-- //tambahkan dua ini --}}
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-html5-2.2.2/datatables.min.js">
    </script>
    {{-- tambahkan ini untuk memisahkan tulisan antara tambah data dan seacrh --}}
    <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-html5-2.2.2/datatables.min.css" />

    <link rel="shortcut icon" href="{{  asset('mazer/dist/assets/images/favicon.svg') }}" type="image/x-icon">
{{-- tambahkan style --}}

    <style>
        table.dataTable td {
            padding: 15px 8px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }

    </style>
</head>

<body>
    <div id="app">
