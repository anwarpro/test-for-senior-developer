<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>

    {{-- fonts--}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            height: 100vh;
            margin: 0;
            padding: 10px;
        }

        table {
            margin-left: 45px;
        }

        td {
            border: 1px solid #eee;
            padding: 3px;
            text-align: center;
        }

        code {
            color: #007b00;
        }

        a {
            color: red;
        }
    </style>

    @stack('css')

</head>
<body>
@yield('content')

@stack('js')

</body>
</html>
