<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>
<body>
<h3 align="center">Enterprise Application Integration</h3>
<p align="center"> newsapi.org API Integration using Laravel</p>
@foreach($api_response['articles'] as  $ars)
    <p align="center">{{$ars['title']}}</p>
    <a href="{{$ars['url']}}">
        <img src="{{$ars['urlToImage']}}" alt="" class="center">
    </a>
@endforeach
</body>
</html>
