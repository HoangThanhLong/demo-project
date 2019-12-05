<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
    <link href="{{ asset('front-end/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('front-end/css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
@include('layouts.header')
@yield('content')

@include('layouts.footer')
<script src="{{asset('front-end/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front-end/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front-end/js/jquery.stellar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front-end/js/main.js')}}"></script>
</body>
</html>
