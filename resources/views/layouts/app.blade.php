<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | Example</title>
    <link rel="stylesheet" href="/css/bootstrap.css">

    {{$styles}}
</head>

<body>
        <x-navbar></x-navbar>
        <div class="pt-4">
            {{$slot}}
        </div>
        <script src={{asset("/js/bootstrap.js")}}></script>
</body>
</html>