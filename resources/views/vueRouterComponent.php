<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Vue Router</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1 style="text-align: center; background: skyblue; color: maroon;">Laravel Vue Router</h1>
        <div id="app">

            <router-view></router-view>

        </div>
        <script type="application/javascript" src="{{asset('js/app.js')}}" ></script>
    </body>
</html>