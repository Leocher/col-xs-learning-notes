<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="//cdn.bootcss.com/bulma/0.3.1/css/bulma.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="columns">
            <div class="column is-4">
                @component('panel')
                    @slot('heading')
                        Hello World !
                    @endslot
                    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
                    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
                    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
                    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
                @endcomponent
            </div>
            <div class="column is-4">
                @component('panel')
                    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
                    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
                    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
                    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
                @endcomponent
            </div>
        </div>
    </div>
</body>
</html>
