<html>

<head>
    <title>Free Ads</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{asset('sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('edit.css')}}">

    <!-- <link rel="stylesheet" href="app1.css"> -->
</head>

<body>
    <div class="container">
        <div class="wrapper">
            @if (Session::has('success'))
            <div>
                <strong>{{ Session::get('success') }}</strong>
            </div>
            @endif
        </div>
        <div class="wrapper">
            @yield('content')
        </div>
    </div>

</body>

</html>