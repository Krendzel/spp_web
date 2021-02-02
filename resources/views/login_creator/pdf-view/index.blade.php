<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@foreach($login_prints as $login_print)
    <h2>{{$login_print->first_name}}</h2>
    <h2>{{$login_print->last_name}}</h2>
    <h2>{{$login_print->login}}</h2>

@endforeach

<div class="" style="display: flex;">
    <div class="border-2 border-green-700" style="float: left; width: 10.2cm; height: 6.6cm; border-color: black; display: flex;">Test FLEX</div>
    <div class="border-2 border-green-700" style="float: right; width: 10.2cm; height: 6.6cm; border-color: black; display: flex;">Test FLEX</div>
    <div class="border-2 border-green-700" style="float: left; width: 10.2cm; height: 6.6cm; border-color: black; display: flex;">Test FLEX</div>
    <div class="border-2 border-green-700" style="float: right; width: 10.2cm; height: 6.6cm; border-color: black; display: flex;">Test FLEX</div>
    <div class="border-2 border-green-700" style="float: left; width: 10.2cm; height: 6.6cm; border-color: black; display: flex;">Test FLEX</div>
    <div class="border-2 border-green-700" style="float: right; width: 10.2cm; height: 6.6cm; border-color: black; display: flex;">Test FLEX</div>
</div>
</body>
</html>
