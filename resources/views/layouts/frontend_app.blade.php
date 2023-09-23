<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <style>
        html{
            scroll-behavior: smooth;
        }
        .about_us{
            /* margin: 5px 0; */
        }
        .abt_img{
            background-image: url('{{ asset("frontend/HandStackBG.png") }}');
            background-size: cover;
            background-position: center center;
            padding: 50px 0;
            text-align: center;
        }
    </style>
    <title>@yield('title') Blood Donation System</title>
</head>

<body>
    @yield('app_content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('custom/custom.js') }}"></script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}", 'Success!')
        @elseif(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}", 'Warning!')
        @elseif(Session::has('error'))
            toastr.error("{{ Session::get('error') }}", 'Error!')
        @endif
    </script>
    @stack('js')

</body>

</html>
